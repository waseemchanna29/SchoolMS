<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Campus;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:super_admin');
    }

    public function index()
    {
        $users = User::with(['roles', 'campus'])
                     ->whereDoesntHave('roles', fn($q) => $q->where('name', 'super_admin'))
                     ->latest()
                     ->paginate(15);

        return view('superadmin.users.index', compact('users'));
    }

    public function create()
    {
        $campuses = Campus::where('status', 'active')->get();
        $roles    = ['admin', 'teacher', 'accountant'];
        return view('superadmin.users.create', compact('campuses', 'roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $data             = $request->validated();
        $data['password'] = Hash::make($data['password']);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user = User::create($data);
        $user->assignRole($request->role);

        return redirect()->route('superadmin.users.index')
                         ->with('success', "User '{$user->name}' created and assigned to campus.");
    }

    public function show(User $user)
    {
        $user->load(['roles', 'campus']);
        return view('superadmin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $campuses = Campus::where('status', 'active')->get();
        $roles    = ['admin', 'teacher', 'accountant'];
        $userRole = $user->roles->first()?->name;
        return view('superadmin.users.edit', compact('user', 'campuses', 'roles', 'userRole'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('avatar')) {
            if ($user->avatar) Storage::disk('public')->delete($user->avatar);
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);
        $user->syncRoles([$request->role]);

        return redirect()->route('superadmin.users.index')
                         ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        if ($user->avatar) Storage::disk('public')->delete($user->avatar);
        $user->delete();
        return redirect()->route('superadmin.users.index')
                         ->with('success', 'User deleted.');
    }
}
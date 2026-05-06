<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCampusRequest;
use App\Http\Requests\UpdateCampusRequest;
use App\Models\Campus;
use Illuminate\Support\Facades\Storage;

class CampusController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:super_admin');
    }

    public function index()
    {
        $campuses = Campus::withCount('users')->latest()->paginate(12);
        return view('superadmin.campuses.index', compact('campuses'));
    }

    public function create()
    {
        return view('superadmin.campuses.create');
    }

    public function store(StoreCampusRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('campuses/logos', 'public');
        }

        Campus::create($data);

        return redirect()->route('superadmin.campuses.index')
                         ->with('success', 'Campus created successfully.');
    }

    public function show(Campus $campus)
    {
        $campus->load(['users.roles']);
        $stats = [
            'admins'      => $campus->users()->role('admin')->count(),
            'teachers'    => $campus->users()->role('teacher')->count(),
            'accountants' => $campus->users()->role('accountant')->count(),
            'total_users' => $campus->users()->count(),
        ];
        return view('superadmin.campuses.show', compact('campus', 'stats'));
    }

    public function edit(Campus $campus)
    {
        return view('superadmin.campuses.edit', compact('campus'));
    }

    public function update(UpdateCampusRequest $request, Campus $campus)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            if ($campus->logo) Storage::disk('public')->delete($campus->logo);
            $data['logo'] = $request->file('logo')->store('campuses/logos', 'public');
        }

        $campus->update($data);

        return redirect()->route('superadmin.campuses.index')
                         ->with('success', 'Campus updated successfully.');
    }

    public function destroy(Campus $campus)
    {
        if ($campus->users()->count() > 0) {
            return back()->with('error', 'Cannot delete a campus that has users assigned.');
        }

        if ($campus->logo) Storage::disk('public')->delete($campus->logo);
        $campus->delete();

        return redirect()->route('superadmin.campuses.index')
                         ->with('success', 'Campus deleted.');
    }
}
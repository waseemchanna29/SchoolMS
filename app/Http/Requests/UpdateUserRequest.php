<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email,' . $this->user->id,
            'password'  => 'nullable|string|min:8|confirmed',
            'phone'     => 'nullable|string|max:20',
            'campus_id' => 'required|exists:campuses,id',
            'role'      => 'required|in:admin,teacher,accountant',
            'status'    => 'required|in:active,inactive',
            'avatar'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
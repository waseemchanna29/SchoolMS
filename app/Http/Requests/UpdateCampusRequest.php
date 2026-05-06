<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCampusRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'name'    => 'required|string|max:255|unique:campuses,name,' . $this->campus->id,
            'email'   => 'nullable|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'city'    => 'nullable|string|max:100',
            'logo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status'  => 'required|in:active,inactive',
        ];
    }
}
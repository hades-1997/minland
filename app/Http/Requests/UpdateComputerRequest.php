<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComputerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $computerId = $this->route('computer') ? $this->route('computer')->id : null;

        return [
            'department' => 'required|max:100',
            'fullname' => 'required|max:100',
            'emp_code' => 'required|max:50|unique:computer,emp_code,'.$computerId,
            'username' => 'required|max:50',
            'device_model' => 'nullable|max:100',
            'cpu' => 'nullable|max:100',
            'hard_disk' => 'nullable|max:100',
            'ram' => 'nullable|max:50',
            'monitor' => 'nullable|max:100',
            'os' => 'nullable|max:100',
            'office_version' => 'nullable|max:50',
            'mail_client' => 'nullable|max:50',
            'mac_address' => 'nullable|max:50',
        ];
    }
}

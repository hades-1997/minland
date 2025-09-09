<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
        return [
            'emp_code' => 'required|unique:employees|max:50',
            'fullname' => 'required|max:100',
            'nickname' => 'nullable|max:50',
            'department' => 'nullable|max:100',
            'position' => 'nullable|max:100',
            'join_date' => 'nullable|date|date_format:Y-m-d',
            'contract_date' => 'nullable|date|date_format:Y-m-d',
            'status' => 'nullable|integer',
            'resign_date' => 'nullable|date|date_format:Y-m-d',
            'tax_code' => 'nullable|max:50',
            'tax_issued_date' => 'nullable|date|date_format:Y-m-d',
            'tax_issued_place' => 'nullable|max:100',
            'social_id' => 'nullable|max:50',
            'insurance_start' => 'nullable|date|date_format:Y-m-d',
            'ethnicity' => 'nullable|max:50',
            'gender' => 'nullable|max:10',
            'birth_year' => 'nullable|date|date_format:Y-m-d',
            'id_number' => 'nullable|max:50',
            'id_issued_date' => 'nullable|date|date_format:Y-m-d',
            'id_issued_place' => 'nullable|max:250',
            'province_origin' => 'nullable|max:250',
            'education' => 'nullable|max:100',
            'address_perm' => 'nullable|max:255',
            'address_temp' => 'nullable|max:255',
            'note' => 'nullable',
            'bank' => 'nullable|max:100',
            'phone' => 'nullable|max:20',
            'birth_place' => 'nullable|max:255',
            'household' => 'nullable|max:255',
            'dependents' => 'nullable|integer',
        ];
    }
}

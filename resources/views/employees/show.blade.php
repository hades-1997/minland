<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="{{ route('employees.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <strong>Employee Code:</strong>
                            {{ $employee->emp_code }}
                        </div>
                        <div>
                            <strong>Full Name:</strong>
                            {{ $employee->fullname }}
                        </div>
                        <div>
                            <strong>Nickname:</strong>
                            {{ $employee->nickname }}
                        </div>
                        <div>
                            <strong>Department:</strong>
                            {{ $employee->department }}
                        </div>
                        <div>
                            <strong>Position:</strong>
                            {{ $employee->position }}
                        </div>
                        <div>
                            <strong>Join Date:</strong>
                            {{ $employee->join_date }}
                        </div>
                        <div>
                            <strong>Contract Date:</strong>
                            {{ $employee->contract_date }}
                        </div>
                        <div>
                            <strong>Status:</strong>
                            {{ $employee->status }}
                        </div>
                        <div>
                            <strong>Resign Date:</strong>
                            {{ $employee->resign_date }}
                        </div>
                        <div>
                            <strong>Tax Code:</strong>
                            {{ $employee->tax_code }}
                        </div>
                        <div>
                            <strong>Tax Issued Date:</strong>
                            {{ $employee->tax_issued_date }}
                        </div>
                        <div>
                            <strong>Tax Issued Place:</strong>
                            {{ $employee->tax_issued_place }}
                        </div>
                        <div>
                            <strong>Social ID:</strong>
                            {{ $employee->social_id }}
                        </div>
                        <div>
                            <strong>Insurance Start:</strong>
                            {{ $employee->insurance_start }}
                        </div>
                        <div>
                            <strong>Ethnicity:</strong>
                            {{ $employee->ethnicity }}
                        </div>
                        <div>
                            <strong>Gender:</strong>
                            {{ $employee->gender }}
                        </div>
                        <div>
                            <strong>Birth Year:</strong>
                            {{ $employee->birth_year }}
                        </div>
                        <div>
                            <strong>ID Number:</strong>
                            {{ $employee->id_number }}
                        </div>
                        <div>
                            <strong>ID Issued Date:</strong>
                            {{ $employee->id_issued_date }}
                        </div>
                        <div>
                            <strong>ID Issued Place:</strong>
                            {{ $employee->id_issued_place }}
                        </div>
                        <div>
                            <strong>Province Origin:</strong>
                            {{ $employee->province_origin }}
                        </div>
                        <div>
                            <strong>Education:</strong>
                            {{ $employee->education }}
                        </div>
                        <div>
                            <strong>Permanent Address:</strong>
                            {{ $employee->address_perm }}
                        </div>
                        <div>
                            <strong>Temporary Address:</strong>
                            {{ $employee->address_temp }}
                        </div>
                        <div>
                            <strong>Note:</strong>
                            {{ $employee->note }}
                        </div>
                        <div>
                            <strong>Bank:</strong>
                            {{ $employee->bank }}
                        </div>
                        <div>
                            <strong>Phone:</strong>
                            {{ $employee->phone }}
                        </div>
                        <div>
                            <strong>Birth Place:</strong>
                            {{ $employee->birth_place }}
                        </div>
                        <div>
                            <strong>Household:</strong>
                            {{ $employee->household }}
                        </div>
                        <div>
                            <strong>Dependents:</strong>
                            {{ $employee->dependents }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Employee Code -->
                            <div>
                                <x-input-label for="emp_code" :value="__('Employee Code')" />
                                <x-text-input id="emp_code" class="block mt-1 w-full" type="text" name="emp_code" :value="old('emp_code')" required autofocus autocomplete="emp_code" />
                                <x-input-error class="mt-2" :messages="$errors->get('emp_code')" />
                            </div>

                            <!-- Full Name -->
                            <div>
                                <x-input-label for="fullname" :value="__('Full Name')" />
                                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autocomplete="fullname" />
                                <x-input-error class="mt-2" :messages="$errors->get('fullname')" />
                            </div>

                            <!-- Nickname -->
                            <div>
                                <x-input-label for="nickname" :value="__('Nickname')" />
                                <x-text-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" :value="old('nickname')" autocomplete="nickname" />
                                <x-input-error class="mt-2" :messages="$errors->get('nickname')" />
                            </div>

                            <!-- Department -->
                            <div>
                                <x-input-label for="department" :value="__('Department')" />
                                <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" autocomplete="department" />
                                <x-input-error class="mt-2" :messages="$errors->get('department')" />
                            </div>

                            <!-- Position -->
                            <div>
                                <x-input-label for="position" :value="__('Position')" />
                                <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" autocomplete="position" />
                                <x-input-error class="mt-2" :messages="$errors->get('position')" />
                            </div>

                            <!-- Join Date -->
                            <div>
                                <x-input-label for="join_date" :value="__('Join Date')" />
                                <x-text-input id="join_date" class="block mt-1 w-full" type="date" name="join_date" :value="old('join_date')" autocomplete="join_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('join_date')" />
                            </div>

                            <!-- Contract Date -->
                            <div>
                                <x-input-label for="contract_date" :value="__('Contract Date')" />
                                <x-text-input id="contract_date" class="block mt-1 w-full" type="date" name="contract_date" :value="old('contract_date')" autocomplete="contract_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('contract_date')" />
                            </div>

                            <!-- Status -->
                            <div>
                                <x-input-label for="status" :value="__('Status')" />
                                <x-text-input id="status" class="block mt-1 w-full" type="number" name="status" :value="old('status')" autocomplete="status" />
                                <x-input-error class="mt-2" :messages="$errors->get('status')" />
                            </div>

                            <!-- Resign Date -->
                            <div>
                                <x-input-label for="resign_date" :value="__('Resign Date')" />
                                <x-text-input id="resign_date" class="block mt-1 w-full" type="date" name="resign_date" :value="old('resign_date')" autocomplete="resign_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('resign_date')" />
                            </div>

                            <!-- Tax Code -->
                            <div>
                                <x-input-label for="tax_code" :value="__('Tax Code')" />
                                <x-text-input id="tax_code" class="block mt-1 w-full" type="text" name="tax_code" :value="old('tax_code')" autocomplete="tax_code" />
                                <x-input-error class="mt-2" :messages="$errors->get('tax_code')" />
                            </div>

                            <!-- Tax Issued Date -->
                            <div>
                                <x-input-label for="tax_issued_date" :value="__('Tax Issued Date')" />
                                <x-text-input id="tax_issued_date" class="block mt-1 w-full" type="date" name="tax_issued_date" :value="old('tax_issued_date')" autocomplete="tax_issued_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('tax_issued_date')" />
                            </div>

                            <!-- Tax Issued Place -->
                            <div>
                                <x-input-label for="tax_issued_place" :value="__('Tax Issued Place')" />
                                <x-text-input id="tax_issued_place" class="block mt-1 w-full" type="text" name="tax_issued_place" :value="old('tax_issued_place')" autocomplete="tax_issued_place" />
                                <x-input-error class="mt-2" :messages="$errors->get('tax_issued_place')" />
                            </div>

                            <!-- Social ID -->
                            <div>
                                <x-input-label for="social_id" :value="__('Social ID')" />
                                <x-text-input id="social_id" class="block mt-1 w-full" type="text" name="social_id" :value="old('social_id')" autocomplete="social_id" />
                                <x-input-error class="mt-2" :messages="$errors->get('social_id')" />
                            </div>

                            <!-- Insurance Start -->
                            <div>
                                <x-input-label for="insurance_start" :value="__('Insurance Start')" />
                                <x-text-input id="insurance_start" class="block mt-1 w-full" type="date" name="insurance_start" :value="old('insurance_start')" autocomplete="insurance_start" />
                                <x-input-error class="mt-2" :messages="$errors->get('insurance_start')" />
                            </div>

                            <!-- Ethnicity -->
                            <div>
                                <x-input-label for="ethnicity" :value="__('Ethnicity')" />
                                <x-text-input id="ethnicity" class="block mt-1 w-full" type="text" name="ethnicity" :value="old('ethnicity')" autocomplete="ethnicity" />
                                <x-input-error class="mt-2" :messages="$errors->get('ethnicity')" />
                            </div>

                            <!-- Gender -->
                            <div>
                                <x-input-label for="gender" :value="__('Gender')" />
                                <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" autocomplete="gender" />
                                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                            </div>

                            <!-- Birth Year -->
                            <div>
                                <x-input-label for="birth_year" :value="__('Birth Year')" />
                                <x-text-input id="birth_year" class="block mt-1 w-full" type="date" name="birth_year" :value="old('birth_year')" autocomplete="birth_year" />
                                <x-input-error class="mt-2" :messages="$errors->get('birth_year')" />
                            </div>

                            <!-- ID Number -->
                            <div>
                                <x-input-label for="id_number" :value="__('ID Number')" />
                                <x-text-input id="id_number" class="block mt-1 w-full" type="text" name="id_number" :value="old('id_number')" autocomplete="id_number" />
                                <x-input-error class="mt-2" :messages="$errors->get('id_number')" />
                            </div>

                            <!-- ID Issued Date -->
                            <div>
                                <x-input-label for="id_issued_date" :value="__('ID Issued Date')" />
                                <x-text-input id="id_issued_date" class="block mt-1 w-full" type="date" name="id_issued_date" :value="old('id_issued_date')" autocomplete="id_issued_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('id_issued_date')" />
                            </div>

                            <!-- ID Issued Place -->
                            <div>
                                <x-input-label for="id_issued_place" :value="__('ID Issued Place')" />
                                <x-text-input id="id_issued_place" class="block mt-1 w-full" type="text" name="id_issued_place" :value="old('id_issued_place')" autocomplete="id_issued_place" />
                                <x-input-error class="mt-2" :messages="$errors->get('id_issued_place')" />
                            </div>

                            <!-- Province Origin -->
                            <div>
                                <x-input-label for="province_origin" :value="__('Province Origin')" />
                                <x-text-input id="province_origin" class="block mt-1 w-full" type="text" name="province_origin" :value="old('province_origin')" autocomplete="province_origin" />
                                <x-input-error class="mt-2" :messages="$errors->get('province_origin')" />
                            </div>

                            <!-- Education -->
                            <div>
                                <x-input-label for="education" :value="__('Education')" />
                                <x-text-input id="education" class="block mt-1 w-full" type="text" name="education" :value="old('education')" autocomplete="education" />
                                <x-input-error class="mt-2" :messages="$errors->get('education')" />
                            </div>

                            <!-- Address Permanent -->
                            <div>
                                <x-input-label for="address_perm" :value="__('Permanent Address')" />
                                <x-text-input id="address_perm" class="block mt-1 w-full" type="text" name="address_perm" :value="old('address_perm')" autocomplete="address_perm" />
                                <x-input-error class="mt-2" :messages="$errors->get('address_perm')" />
                            </div>

                            <!-- Address Temporary -->
                            <div>
                                <x-input-label for="address_temp" :value="__('Temporary Address')" />
                                <x-text-input id="address_temp" class="block mt-1 w-full" type="text" name="address_temp" :value="old('address_temp')" autocomplete="address_temp" />
                                <x-input-error class="mt-2" :messages="$errors->get('address_temp')" />
                            </div>

                            <!-- Note -->
                            <div>
                                <x-input-label for="note" :value="__('Note')" />
                                <x-text-input id="note" class="block mt-1 w-full" type="text" name="note" :value="old('note')" autocomplete="note" />
                                <x-input-error class="mt-2" :messages="$errors->get('note')" />
                            </div>

                            <!-- Bank -->
                            <div>
                                <x-input-label for="bank" :value="__('Bank')" />
                                <x-text-input id="bank" class="block mt-1 w-full" type="text" name="bank" :value="old('bank')" autocomplete="bank" />
                                <x-input-error class="mt-2" :messages="$errors->get('bank')" />
                            </div>

                            <!-- Phone -->
                            <div>
                                <x-input-label for="phone" :value="__('Phone')" />
                                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" autocomplete="phone" />
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>

                            <!-- Birth Place -->
                            <div>
                                <x-input-label for="birth_place" :value="__('Birth Place')" />
                                <x-text-input id="birth_place" class="block mt-1 w-full" type="text" name="birth_place" :value="old('birth_place')" autocomplete="birth_place" />
                                <x-input-error class="mt-2" :messages="$errors->get('birth_place')" />
                            </div>

                            <!-- Household -->
                            <div>
                                <x-input-label for="household" :value="__('Household')" />
                                <x-text-input id="household" class="block mt-1 w-full" type="text" name="household" :value="old('household')" autocomplete="household" />
                                <x-input-error class="mt-2" :messages="$errors->get('household')" />
                            </div>

                            <!-- Dependents -->
                            <div>
                                <x-input-label for="dependents" :value="__('Dependents')" />
                                <x-text-input id="dependents" class="block mt-1 w-full" type="number" name="dependents" :value="old('dependents')" autocomplete="dependents" />
                                <x-input-error class="mt-2" :messages="$errors->get('dependents')" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

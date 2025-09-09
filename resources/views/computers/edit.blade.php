<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Computer') }}
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

                    <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Department -->
                            <div>
                                <x-input-label for="department" :value="__('Department')" />
                                <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department', $computer->department)" required autofocus autocomplete="department" />
                                <x-input-error class="mt-2" :messages="$errors->get('department')" />
                            </div>

                            <!-- Full Name -->
                            <div>
                                <x-input-label for="fullname" :value="__('Full Name')" />
                                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname', $computer->fullname)" required autocomplete="fullname" />
                                <x-input-error class="mt-2" :messages="$errors->get('fullname')" />
                            </div>

                            <!-- Employee Code -->
                            <div>
                                <x-input-label for="emp_code" :value="__('Employee Code')" />
                                <x-text-input id="emp_code" class="block mt-1 w-full" type="text" name="emp_code" :value="old('emp_code', $computer->emp_code)" required autocomplete="emp_code" />
                                <x-input-error class="mt-2" :messages="$errors->get('emp_code')" />
                            </div>

                            <!-- Username -->
                            <div>
                                <x-input-label for="username" :value="__('Username')" />
                                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username', $computer->username)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('username')" />
                            </div>

                            <!-- Device Model -->
                            <div>
                                <x-input-label for="device_model" :value="__('Device Model')" />
                                <x-text-input id="device_model" class="block mt-1 w-full" type="text" name="device_model" :value="old('device_model', $computer->device_model)" autocomplete="device_model" />
                                <x-input-error class="mt-2" :messages="$errors->get('device_model')" />
                            </div>

                            <!-- CPU -->
                            <div>
                                <x-input-label for="cpu" :value="__('CPU')" />
                                <x-text-input id="cpu" class="block mt-1 w-full" type="text" name="cpu" :value="old('cpu', $computer->cpu)" autocomplete="cpu" />
                                <x-input-error class="mt-2" :messages="$errors->get('cpu')" />
                            </div>

                            <!-- Hard Disk -->
                            <div>
                                <x-input-label for="hard_disk" :value="__('Hard Disk')" />
                                <x-text-input id="hard_disk" class="block mt-1 w-full" type="text" name="hard_disk" :value="old('hard_disk', $computer->hard_disk)" autocomplete="hard_disk" />
                                <x-input-error class="mt-2" :messages="$errors->get('hard_disk')" />
                            </div>

                            <!-- RAM -->
                            <div>
                                <x-input-label for="ram" :value="__('RAM')" />
                                <x-text-input id="ram" class="block mt-1 w-full" type="text" name="ram" :value="old('ram', $computer->ram)" autocomplete="ram" />
                                <x-input-error class="mt-2" :messages="$errors->get('ram')" />
                            </div>

                            <!-- Monitor -->
                            <div>
                                <x-input-label for="monitor" :value="__('Monitor')" />
                                <x-text-input id="monitor" class="block mt-1 w-full" type="text" name="monitor" :value="old('monitor', $computer->monitor)" autocomplete="monitor" />
                                <x-input-error class="mt-2" :messages="$errors->get('monitor')" />
                            </div>

                            <!-- OS -->
                            <div>
                                <x-input-label for="os" :value="__('Operating System')" />
                                <x-text-input id="os" class="block mt-1 w-full" type="text" name="os" :value="old('os', $computer->os)" autocomplete="os" />
                                <x-input-error class="mt-2" :messages="$errors->get('os')" />
                            </div>

                            <!-- Office Version -->
                            <div>
                                <x-input-label for="office_version" :value="__('Office Version')" />
                                <x-text-input id="office_version" class="block mt-1 w-full" type="text" name="office_version" :value="old('office_version', $computer->office_version)" autocomplete="office_version" />
                                <x-input-error class="mt-2" :messages="$errors->get('office_version')" />
                            </div>

                            <!-- Mail Client -->
                            <div>
                                <x-input-label for="mail_client" :value="__('Mail Client')" />
                                <x-text-input id="mail_client" class="block mt-1 w-full" type="text" name="mail_client" :value="old('mail_client', $computer->mail_client)" autocomplete="mail_client" />
                                <x-input-error class="mt-2" :messages="$errors->get('mail_client')" />
                            </div>

                            <!-- MAC Address -->
                            <div>
                                <x-input-label for="mac_address" :value="__('MAC Address')" />
                                <x-text-input id="mac_address" class="block mt-1 w-full" type="text" name="mac_address" :value="old('mac_address', $computer->mac_address)" autocomplete="mac_address" />
                                <x-input-error class="mt-2" :messages="$errors->get('mac_address')" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Computer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="{{ route('computer.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <strong>Department:</strong>
                            {{ $computer->department }}
                        </div>
                        <div>
                            <strong>Full Name:</strong>
                            {{ $computer->fullname }}
                        </div>
                        <div>
                            <strong>Employee Code:</strong>
                            {{ $computer->emp_code }}
                        </div>
                        <div>
                            <strong>Username:</strong>
                            {{ $computer->username }}
                        </div>
                        <div>
                            <strong>Device Model:</strong>
                            {{ $computer->device_model }}
                        </div>
                        <div>
                            <strong>CPU:</strong>
                            {{ $computer->cpu }}
                        </div>
                        <div>
                            <strong>Hard Disk:</strong>
                            {{ $computer->hard_disk }}
                        </div>
                        <div>
                            <strong>RAM:</strong>
                            {{ $computer->ram }}
                        </div>
                        <div>
                            <strong>Monitor:</strong>
                            {{ $computer->monitor }}
                        </div>
                        <div>
                            <strong>Operating System:</strong>
                            {{ $computer->os }}
                        </div>
                        <div>
                            <strong>Office Version:</strong>
                            {{ $computer->office_version }}
                        </div>
                        <div>
                            <strong>Mail Client:</strong>
                            {{ $computer->mail_client }}
                        </div>
                        <div>
                            <strong>MAC Address:</strong>
                            {{ $computer->mac_address }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

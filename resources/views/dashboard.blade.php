<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Notes Application Features
                    </h2>
                    <p class="text-sm text-gray-500">
                        Details and specifications.
                    </p>
                </div>
                <div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            PHP MVC Framework
                        </p>
                        <p>
                            Laravel
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4">
                        <p class="text-gray-600">
                            Restful API Catalog
                        </p>
                        <div class="space-y-2">
                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 bg-blue-600 rounded-full">POST</span>
                                    <span>
                                User Login
                            </span>
                                </div>
                                <a href="{{ url('api/login') }}" class="text-purple-700 hover:underline">
                                    api/login
                                </a>
                            </div>

                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 bg-blue-600 rounded-full">POST</span>
                                    <span>
                                Register User
                            </span>
                                </div>
                                <a href="{{ url('api/login') }}" class="text-purple-700 hover:underline">
                                    api/register
                                </a>
                            </div>

                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 bg-blue-600 rounded-full">GET</span>
                                    <span>
                                View Notes
                            </span>
                                </div>
                                <a href="{{ url('api/login') }}" class="text-purple-700 hover:underline">
                                    api/v1/notes
                                </a>
                            </div>

                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 bg-blue-600 rounded-full">GET</span>
                                    <span>
                                View Note
                            </span>
                                </div>
                                <a href="{{ url('api/login') }}" class="text-purple-700 hover:underline">
                                    api/v1/notes/{note}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

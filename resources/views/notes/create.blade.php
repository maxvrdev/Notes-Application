<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full py-8 space-y-8">

            <div class="rounded bg-white max-w-md rounded overflow-hidden shadow-xl p-5">

                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Create a Note
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    for the user you choose.
                </p>

                <form class="space-y-4" action="{{ route('notes.store') }}" method="POST">
                    @csrf

                    <div class="rounded-md shadow-sm -space-y-px">
                        <div class="grid gap-6">
                            <div class="col-span-12">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">User</label>
                                <select name="user_id" class="w-full border bg-white rounded px-3 py-2 outline-none">
                                    <option value="">Please select a User</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" class="py-1" @php if(request()->get('user_id')==$user->id){echo 'selected';}  @endphp >{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-span-12">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" name="title" id="title" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                            </div>

                            <div class="col-span-12">
                                <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                                <textarea name="note" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="6"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="text-sm">
                            <a href="{{ route('users.index') }}" class="font-medium text-blue-600 hover:text-blue-500">
                                Back to Users
                            </a>
                        </div>
                        <div class="text-sm">
                            <a href="{{ route('users.index') }}" class="font-medium text-blue-600 hover:text-blue-500">
                                View All Notes
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Create Note
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    All Registered Users
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-table.table :headers="['Name','Email', 'Notes', 'Created At', 'Updated At', '']">
                        @foreach($users as $user)
                            <tr>
                                <x-table.td>{{$user->name}}</x-table.td>
                                <x-table.td>{{$user->email}}</x-table.td>
                                <x-table.td>
                                    @if(auth()->user()->id==$user->id)
                                    <div class="inline-block relative w-64">
                                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                        onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                            <option value="">Notes</option>
                                            @foreach($user->notes as $note)
                                                <option value="{{ route('notes.edit', $note->id) }}">{{ $note->title }}</option>
                                            @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                                        </div>
                                    </div>
                                    @endif
                                </x-table.td>
                                <x-table.td>{{$user->created_at}}</x-table.td>
                                <x-table.td>{{$user->updated_at}}</x-table.td>
                                <x-table.td>
                                    <a href="{{ route('notes.create', ['user_id'=>$user->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                        Add Note
                                    </a>
                                </x-table.td>
                            </tr>
                        @endforeach
                    </x-table.table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

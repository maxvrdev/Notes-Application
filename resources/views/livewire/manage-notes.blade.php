<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    All Notes for <span class="2xl:font-bold">{{ auth()->user()->name }}</span>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">

                    <x-table.table :headers="['Title','Note', '']">
                        @foreach($notes as $note)
                            <tr>
                                <x-table.td>{{$note->title}}</x-table.td>
                                <x-table.td>{{$note->note}}</x-table.td>
                                <x-table.td align="center">
                                    <div class="inline-flex" role="group" aria-label="Button group">
                                        <a href="{{ route('notes.edit', ['note'=>$note->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-l-lg">
                                            Edit
                                        </a>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-r-lg" wire:click="confirmDelete({{ $note->id }})">
                                            Delete
                                        </button>
                                    </div>
                                </x-table.td>
                            </tr>
                        @endforeach
                    </x-table.table>

                </div>
            </div>
        </div>
    </div>

    <x-confirmation-modal wire:modal.defer="showDeleteNoteModal">
        <x-slot name="title">
            Delete: {{ $currentNote->title }}
        </x-slot>

        <x-slot name="body">
            Are you sure you want to permanently delete this note? <br>This action cannot be undone.
        </x-slot>

        <x-slot name="footer">
            <x-button type="button" class="border border-transparent px-4 py-2 bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"  wire:click="delete({{ $currentNote->id }})">
                Delete
            </x-button>
            <x-button type="button" wire:click="$set('showDeleteNoteModal', false)">
                Cancel
            </x-button>
        </x-slot>

    </x-confirmation-modal>

    {{--<form>

    @if($showDeleteNoteModal)
    <x-confirmation-modal wire:model.defer="showDeleteNoteModal">
        <x-slot name="title">
            Delete Item
        </x-slot>

        <x-slot name="body">
            Are you sure you want to permanently delete this item? <br>This action cannot be undone.
        </x-slot>

        <x-slot name="footer">
            <x-button type="button" class="border border-transparent px-4 py-2 bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" wire:click="handle" >
                Delete
            </x-button>
            <x-button type="button" wire:click="$set('showDeleteNoteModal', false)">
                Cancel
            </x-button>
        </x-slot>

    </x-confirmation-modal>
    @endif

    </form>--}}
</div>

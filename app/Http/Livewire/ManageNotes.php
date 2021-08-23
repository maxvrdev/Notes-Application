<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class ManageNotes extends Component
{
    public $showDeleteNoteModal = false;

    public Note $currentNote;

    public function mount()
    {
        $this->currentNote = new Note();
    }

    public function confirmDelete(Note $note)
    {
        $this->currentNote = $note;

        $this->showDeleteNoteModal = true;
    }

    public function delete(Note $note)
    {
        $note->delete();
    }

    public function render()
    {
        $notes = Note::where('user_id', '=', auth()->user()->id)->get();

        return view('livewire.manage-notes')
            ->with('notes', $notes);
    }
}

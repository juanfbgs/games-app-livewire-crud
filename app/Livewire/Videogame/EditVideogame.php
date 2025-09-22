<?php

namespace App\Livewire\Videogame;

use App\Livewire\Forms\VideogameForm;
use App\Models\Videogame;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditVideogame extends Component
{
    use WithFileUploads;

    public VideogameForm $form;

    public function mount(Videogame $videogame)
    {
        $this->form->setVideogame($videogame);
    }

    public function save() 
    {
        $this->form->update();
        $this->reset();
        session()->flash('status', 'Videogame successfully updated.');
        return $this->redirectRoute('videogames.index', navigate: true);
    }

  
    public function render()
    {
        return view('livewire.videogame.edit-videogame');
    }
}

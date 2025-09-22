<?php

namespace App\Livewire\Videogame;

use App\Models\Videogame;
use Livewire\Component;
use Storage;

class IndexVideogames extends Component
{


    public function deleteVideogame($id)
    {
        $videogame = Videogame::findOrFail($id);

        Storage::disk('public')->delete($videogame->image);
        session()->flash('status', 'Videogame successfully deleted.');
        $videogame->delete();
    }


    public function render()
    {
        $videogames = Videogame::all();
        return view('livewire.videogame.index-videogames', [
            'videogames' => $videogames,
        ]);
    }
}

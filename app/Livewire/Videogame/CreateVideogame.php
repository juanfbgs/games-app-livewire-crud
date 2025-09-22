<?php

namespace App\Livewire\Videogame;

use App\Livewire\Forms\VideogameForm;
use App\Models\Category;
use App\Models\Studio;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateVideogame extends Component
{
    use WithFileUploads;


    public VideogameForm $form;

    public function save()
    {

        $this->validate();

        $imagePath = $this->form->image->store('videogames', 'public');

        $category = Category::firstOrCreate(
            ['name' => $this->form->category_name],
            ['slug' => Str::slug($this->form->category_name)]
        );

        $studio = Studio::firstOrCreate(
            ['name' => $this->form->studio_name],
            ['slug' => Str::slug($this->form->studio_name)]
        );

        $videogame = auth()->user()->videogames()->make([
            'title' => $this->form->title,
            'description' => $this->form->description,
            'image' => $imagePath,
            'rating' => $this->form->rating,
            'price' => $this->form->price,
            'release_date' => $this->form->release_date,
        ]);

        // Associate relationships
        $videogame->category()->associate($category);
        $videogame->studio()->associate($studio);
        $videogame->save();

        $this->reset();
        session()->flash('status', 'Videogame successfully created.');
        return $this->redirectRoute('videogames.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.videogame.create-videogame');
    }
}

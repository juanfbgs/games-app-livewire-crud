<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use App\Models\Studio;
use App\Models\Videogame;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Storage;

class VideogameForm extends Form
{
    public ?Videogame $videogame;

    #[Validate('required|string|max:255')]
    public string $title = '';

    #[Validate('required|string')]
    public string $description = '';

    public $image;

    #[Validate('required|numeric|min:0|max:10')]
    public float $rating = 0;

    #[Validate('required|numeric|min:0|max:999.99')]
    public float $price = 0;

    #[Validate('required|date')]
    public string $release_date = '';

    #[Validate('required|string|max:255')]
    public string $category_name = '';

    #[Validate('required|string|max:255')]
    public string $studio_name = '';

    public function setVideogame(Videogame $videogame)
    {
        $this->videogame = $videogame;
        $this->title = $videogame->title;
        $this->description = $videogame->description;
        $this->rating = $videogame->rating;
        $this->price = $videogame->price;
        $this->release_date = $videogame->release_date;
        $this->category_name = $videogame->category->name;
        $this->studio_name = $videogame->studio->name;
    }

    public function update()
    {
        $data = $this->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $category = Category::updateOrCreate(
            ['name' => $this->category_name],
            ['slug' => Str::slug($this->category_name)]
        );

        $studio = Studio::updateOrCreate(
            ['name' => $this->studio_name],
            ['slug' => Str::slug($this->studio_name)]
        );

        if ($this->image) {
            // Delete the old image from storage
            Storage::disk('public')->delete($this->videogame->image);

            // Store the new image and update the path
            $data['image'] = $this->image->store('videogames', 'public');
        }

        if (! $this->image) {
            unset($data['image']);
        }

        $this->videogame->category()->associate($category);
        $this->videogame->studio()->associate($studio);
        $this->videogame->update($data);
    }
}

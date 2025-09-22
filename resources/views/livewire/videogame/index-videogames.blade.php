<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-base-content leading-tight">
                {{ __('Videogames') }}
            </h2>

            <div class="self-end">
            <a href="{{ route('videogames.create') }}" class="btn btn-sm btn-primary">Create</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-100 dark:bg-base-300 shadow-md rounded-box">
                <div class="p-6 text-base-content">
                    <h2 class="text-lg font-medium mb-4">List of Videogames</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($videogames as $videogame)
                            <div class="card bg-base-200 shadow-sm border border-base-300">
                                <figure class="px-4 pt-4">
                                    <img src="{{ Storage::url($videogame->image) }}" alt="{{ $videogame->title }}"
                                        class="rounded-xl h-40 object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h3 class="card-title text-primary">
                                        {{ $videogame->title }}
                                        <span
                                            class="badge badge-outline badge-sm text-warning ml-2">{{ $videogame->rating }}</span>
                                    </h3>

                                    <p class="text-sm text-subtext0 line-clamp-3">{{ $videogame->description }}</p>

                                    <div class="flex justify-between text-sm mt-2">
                                        <span class="text-accent">Price:</span>
                                        <span
                                            class="text-success font-semibold">${{ number_format($videogame->price, 2) }}</span>
                                    </div>

                                    <div class="flex justify-between text-sm">
                                        <span class="text-info">Release:</span>
                                        <span class="text-white">{{ $videogame->release_date }}</span>
                                    </div>



                                    <div class="flex justify-between text-sm">
                                        <span class="text-info">Studio: </span>
                                        <span class="text-white"> {{ $videogame->studio->name }} </span>
                                    </div>

                                    <div class="flex justify-between text-sm">
                                        <span class="text-info">Category: </span>
                                        <span class="text-secondary">{{ $videogame->category->name }}</span>
                                    </div>

                                    <div class="card-actions justify-end mt-4">
                                        <a href="{{ route('videogames.edit', $videogame) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>

                                        <a wire:click="deleteVideogame({{ $videogame->id }})"
                                            class="btn btn-sm btn-error">Delete</a>
                                    </div>
                                  
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if ($videogames->isEmpty())
                        <div class="mt-4 text-warning text-sm">No videogames created yet.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
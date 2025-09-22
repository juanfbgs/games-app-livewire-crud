<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-base-content leading-tight">
                {{ __('Videogames') }}
            </h2>

            <div class="flex gap-2">
                <a href="{{ route('videogames.create') }}" class="btn btn-sm btn-primary">Create</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-100 dark:bg-base-300 shadow-md rounded-box">
                <div class="p-6 text-base-content">
                    <div class="max-w-2xl mx-auto">
                        <h2 class="text-xl font-semibold mb-6 text-base-content">Create Videogame</h2>

                        <form wire:submit.prevent="save" class="flex flex-col gap-4">
                            <!-- Title Input -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Title *</span>
                                </label>
                                <input 
                                    type="text" 
                                    wire:model="form.title" 
                                    placeholder="Enter videogame title"
                                    class="input input-bordered w-full focus:outline-none @error('title') input-error @enderror" 
                                />
                                @error('form.title')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <!-- Description Input -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Description *</span>
                                </label>
                                <textarea 
                                    wire:model="form.description" 
                                    placeholder="Enter videogame description" 
                                    class="textarea textarea-bordered w-full focus:outline-none @error('description') textarea-error @enderror"
                                    rows="4"
                                ></textarea>
                                @error('form.description')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <!-- Image Upload -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Image *</span>
                                </label>
                                <input 
                                    type="file" 
                                    wire:model="form.image" 
                                    accept="image/*"
                                    class="file-input file-input-bordered w-full focus:outline-none @error('image') file-input-error @enderror" 
                                />
                                @error('form.image')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                                
                                <!-- Image Preview -->
                                @if ($form->image)
                                    <div class="mt-2">
                                        <img src="{{ $form->image->temporaryUrl() }}" alt="Preview" class="w-32 h-32 object-cover rounded-lg border-2 border-base-300">
                                    </div>
                                @endif
                                
                                <!-- Loading indicator for image upload -->
                                <div wire:loading wire:target="form.image" class="text-sm text-base-content/60 mt-1">
                                    Uploading image...
                                </div>
                            </div>

                            <!-- Rating Input -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Rating * (0-10)</span>
                                </label>
                                <input 
                                    type="number" 
                                    step="0.1" 
                                    min="0" 
                                    max="10" 
                                    wire:model="form.rating" 
                                    placeholder="0.0"
                                    class="input input-bordered w-full focus:outline-none @error('form.rating') input-error @enderror" 
                                />
                                @error('form.rating')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <!-- Price Input -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Price * ($)</span>
                                </label>
                                <input 
                                    type="number" 
                                    step="0.01" 
                                    min="0" 
                                    max="999.99" 
                                    wire:model="form.price" 
                                    placeholder="0.00"
                                    class="input input-bordered w-full focus:outline-none @error('form.price') input-error @enderror" 
                                />
                                @error('form.price')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <!-- Release Date Input -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Release Date *</span>
                                </label>
                                <input 
                                    type="date" 
                                    wire:model="form.release_date" 
                                    class="input input-bordered w-full focus:outline-none @error('form.release_date') input-error @enderror" 
                                />
                                @error('form.release_date')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <!-- Category Name Input -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Category *</span>
                                </label>
                                <input 
                                    type="text" 
                                    wire:model="form.category_name" 
                                    placeholder="e.g., Action, RPG, Strategy"
                                    class="input input-bordered w-full focus:outline-none @error('form.category_name') input-error @enderror" 
                                />
                                @error('form.category_name')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <!-- Studio Name Input -->
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Studio *</span>
                                </label>
                                <input 
                                    type="text" 
                                    wire:model="form.studio_name" 
                                    placeholder="e.g., Nintendo, EA Games, Ubisoft"
                                    class="input input-bordered w-full focus:outline-none @error('form.studio_name') input-error @enderror" 
                                />
                                @error('form.studio_name')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end mt-6">
                                <button 
                                    type="submit" 
                                    class="btn btn-primary"
                                    wire:loading.attr="disabled"
                                    wire:target="save"
                                >
                                    <span wire:loading.remove wire:target="save">Create Videogame</span>
                                    <span wire:loading wire:target="save" class="flex items-center gap-2">
                                        <span class="loading loading-spinner loading-sm"></span>
                                        Creating...
                                    </span>
                                </button>
                            </div>

                            <!-- Success Message -->
                            @if (session()->has('status'))
                                <div class="alert alert-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ session('status') }}</span>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
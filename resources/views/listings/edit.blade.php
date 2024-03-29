<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-red-600">
                Edit Product
            </h2>
            <p class="mb-4">Edit: {{$listing->title}}</p>
        </header>

        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="company"
                    value="{{$listing->company}}" />

                @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Item Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="title"
                    placeholder="Example: Senior Laravel Developer" value="{{$listing->title}}" />

                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" />

                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                <img class="w-48 mr-6 mb-6"
                    src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                    alt="" />

                @error('logo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Product Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full text-blue-500" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">
                                {{$listing->description}}
                        </textarea>

                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="price" class="inline-block text-lg mb-2">Price</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="price"
                    placeholder="Example: 1200" value="{{$listing->price}}" />

                @error('price')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
        </div>
    </x-card>
</x-layout>
<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-red-600">
                Create
            </h2>
            <p class="mb-4">Post a Product</p>
        </header>

    <div class="text-center">
        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="company"
                    placeholder="Company: Apple,Hp,Lenovo etc" value="{{old('company')}}" />

                @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Item Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="title"
                    placeholder="Example: Mac Book Pro" value="{{old('title')}}" />

                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="tags"
                    placeholder="Example: Mac Book, 4 GB RAM, SSD, etc" value="{{old('tags')}}" />

                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Product Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full text-blue-500" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc" value= "{{old('description')}}">
                </textarea>

                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>
            
            <div class="mb-6">
                <label for="price" class="inline-block text-lg mb-2">Price</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full text-blue-500" name="price"
                    placeholder="Example: 1200" value="{{old('price')}}" />
                    
                @error('price')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>
            <br>

            <div class="mb-6">
                <button type="submit"
                    style="padding: 0.5rem 1rem; background-color: #14B789; color: white; border-radius: 0.25rem; border: none; cursor: pointer;">Create
                </button>
                <br>
                <br>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
        </div>
    </x-card>
</x-layout>
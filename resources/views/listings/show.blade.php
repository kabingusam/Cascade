<x-layout>
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">  
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-64 h-64 object-cover rounded-md mr-6 mb-6" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
                <!-- The added class "rounded-md" gives the image a border radius of 10px. Adjust the "w-64" and "h-64" to control the size of the image. -->
                <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                <!-- <div class="text-xl font-bold mb-4">{{$listing->company}}</div> -->
                <p class="mt-2 text-pink-600 font-semibold">Price ksh {{$listing->price}}</p>
                <x-listing-tags :tagsCsv="$listing->tags" />
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Product Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$listing->description}}
                    </div>
                </div>
                <a href="https://wa.me/+254720822798" class="block bg-laravel text-white mt-8 py-2 px-2 rounded-xl hover:opacity-80 flex items-center justify-center">
                    <i class="fa-solid fa-comments"></i>
                    <span class="ml-1">Contact</span>
                </a>
            </div>
        </x-card>
    </div>
</x-layout>

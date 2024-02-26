<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4">Login into your account</p>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf


            <div class="mb-6 text-center">
                <label for="email" class="inline-block text-lg mb-2"></label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{old('email')}}" 
                    placeholder="Your Email"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <br>

            <div class="mb-6 text-center">
                <label for="password" class="inline-block text-lg mb-2">
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{old('password')}}" 
                    placeholder="Your Password"/>

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <br>

        <div class="mb-6 text-center">
            <button type="submit" class="bg-laravel text-black rounded py-2 px-4"
                style="transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#14B789';"
                onmouseout="this.style.backgroundColor='';">
                Sign In
            </button>
        </div>
        </form>
    </x-card>
</x-layout>
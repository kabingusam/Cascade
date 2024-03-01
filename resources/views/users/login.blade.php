<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24" style="background: #f5f5f5;">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4">Login into your account</p>
        </header>

        <form method="POST" action="/users/authenticate" onsubmit="return validateForm()">
            @csrf

            <div class="mb-6 text-center">
                <label for="email" class="inline-block text-lg mb-2"></label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{old('email')}}" 
                    placeholder="Your Email" required/>

                @error('email')
                <p class="text-red-500 text-xs mt-1" id="emailError">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6 text-center">
                <label for="password" class="inline-block text-lg mb-2">
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{old('password')}}" 
                    placeholder="Your Password" required/>

                @error('password')
                <p class="text-red-500 text-xs mt-1" id="passwordError">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6 text-center">
                <button type="submit" class="bg-laravel text-black rounded py-2 px-4 hover:bg-green-500">
                    Sign In
                </button>
            </div>
        </form>
    </x-card>
</x-layout>

<script>
    function validateForm() {
        let email = document.forms["loginForm"]["email"].value;
        let password = document.forms["loginForm"]["password"].value;

        if (email == "") {
            document.getElementById("emailError").innerHTML = "Email is required";
            return false;
        } else {
            document.getElementById("emailError").innerHTML = "";
        }

        if (password == "") {
            document.getElementById("passwordError").innerHTML = "Password is required";
            return false;
        } else {
            document.getElementById("passwordError").innerHTML = "";
        }

        return true;
    }
</script>

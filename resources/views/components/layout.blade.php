<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/swlogo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>SilentWise</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center bg-gray-800 text-white p-2">
        <a href="/"><img class="w-12 px-2 py-0" src="{{asset('images/swlogo.png')}}" alt="Logo" class="logo" /></a>

        <!-- Hamburger Icon -->
        <button class="block md:hidden text-white" id="menu-toggle">
            <i class="fa-solid fa-bars"></i>
        </button>

        <ul class="flex space-x-6 md:space-x-12 md:mr-6 text-lg" id="menu">
            @auth
            <li>
                <span class="font-mono font-bold uppercase">
                    Welcome {{ auth()->user()->name }}
                </span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
            </li>
            <li>
                <a href="/listings/create" class="hover:text-laravel"><i class="fa-solid fa-pencil-alt"></i> Post</a>
            </li>
            <li>
                <!-- <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a> -->
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="hover:text-laravel">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>
            @else
            <li>
                <a href="/" class="hover:text-laravel">Home</a>
            </li>
            <li>
                <a href="/listings/reach" class="hover:text-laravel">Reach Us</a>
            </li>
            <li>
                <a href="/listings/about" class="hover:text-laravel">About Us</a>
            </li>
            @endauth


        </ul>
    </nav>
    <main>
        {{$slot}}
    </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-10 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023 SilentWise</p>
        <!-- <p class="ml-2">Codekabi</p> -->
    </footer>

    <x-flash-message />

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.getElementById("menu-toggle");
            const menu = document.getElementById("menu");

            menuToggle.addEventListener("click", function () {
                menu.classList.toggle("hidden");
            });

            // Hide the navigation links on initial load for smaller screens
            if (window.innerWidth < 768) {
                menu.classList.add("hidden");
            }

            // Add a resize event listener to show/hide the links when the screen size changes
            window.addEventListener("resize", function () {
                if (window.innerWidth < 768) {
                    menu.classList.add("hidden");
                } else {
                    menu.classList.remove("hidden");
                }
            });
        });
    </script>
</body>

</html>

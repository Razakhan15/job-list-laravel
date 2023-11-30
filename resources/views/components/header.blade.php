<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Gigs</title>
</head>

<body>
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        {{-- <a href="#" class="flex items-center py-4 px-2">
                            <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2">
                            <span class="font-semibold text-gray-500 text-lg">Navigation</span>
                        </a> --}}
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden lg:flex items-center space-x-1">
                        <a href="/" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Home</a>
                        <a href="/listings/create"
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Post
                            Jobs</a>
                        <a href=""
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
                        <a href=""
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact
                            Us</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden lg:flex items-center space-x-3 ">
                    @include('partials._search')
                    @include('partials.links')
                </div>
                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center space-x-5 m-2">
                    @include('partials.links')
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu p-5">
            <ul class="">
                <li class="active"><a href="/"
                        class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
                <li><a href="/listings/create"
                        class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Post Jobs</a></li>
                <li><a href="#about"
                        class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
                <li><a href="#contact"
                        class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
                @include('partials._search')
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");
            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
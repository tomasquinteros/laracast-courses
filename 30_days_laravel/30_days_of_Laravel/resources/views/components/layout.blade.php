<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$heading}}</title>
</head>
<body class="text-xl">
<header class=" bg-[#1C242F] text-white py-3 px-8 border-b-[1px] border-gray-600">
    <div class="max-w-[1200px] flex flex-row gap-8 items-center m-auto">
        <img src="https://laracasts.com/images/logo/logo-triangle.svg" alt="logo" class="h-8 w-8">
        <nav class="flex flex-row justify-between w-full">
            <div class="flex flex-row gap-4">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
            <div>
                @guest
                    <x-nav-link href="/login" :active="request()->is('/login')">Log In</x-nav-link>
                    <x-nav-link href="/register" :active="request()->is('/register')">Register</x-nav-link>
                @endguest
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <x-form-button>Logout</x-form-button>
                    </form>
                @endauth
            </div>
        </nav>
    </div>
</header>
<section class="shadow">
    <div class="max-w-[1200px] mx-auto py-6  sm:flex sm:justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        @auth
            <x-button href="/jobs/create">Create job</x-button>
        @endauth
    </div>
</section>
<main class="text-[2rem] py-8 max-w-[1200px] m-auto">
    {{$slot}}
</main>
</body>
</html>
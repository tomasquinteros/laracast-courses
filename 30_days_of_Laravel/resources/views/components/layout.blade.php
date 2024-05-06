<!doctype html>
<html lang="en" class="bg-[#1D2331] text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$heading}}</title>
</head>
<body class="text-xl">
<header class="flex flex-row justify-center items-center p-2 border-b-[1px] border-gray-600 shadow-[0_0_5px_rgba(0,0,0,0.5)]">
    <nav class="flex flex-row gap-4">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </nav>
</header>
<main class="text-[2rem] p-4">
    {{$slot}}
</main>
</body>
</html>
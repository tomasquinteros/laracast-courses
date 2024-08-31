<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
      rel="stylesheet">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white px-10 font-hanken-grotesk">
<header>
    <nav class="flex flex-row justify-between items-center py-4 border-b-white/20 border-b-2">
        <div class="space-x-4">
            <a href="/">
                <img src="{{Vite::asset('/resources/images/logo.svg')}}">
            </a>
        </div>
        <div class="space-x-6 font-bold text-md">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>

        <div class="flex flex-row gap-2 items-center font-bold">
            @guest
                <a href="/login" class="px-2 py-1 rounded-lg hover:bg-white/20 transition-colors duration-300">Log In</a>
                <a href="/register" class="px-2 py-1 rounded-lg bg-white/50 hover:bg-white/60 transition-colors duration-300">Sign Up</a>
            @endguest

            @auth
                <a href="/jobs/create">
                    <span class="w-2 h-2 bg-blue-700 inline-block"></span>
                    Post a job
                </a>
            @endauth
        </div>
    </nav>
</header>
<main class="my-10 m-auto max-w-md ">
    {{$slot}}
</main>
</body>
</html>
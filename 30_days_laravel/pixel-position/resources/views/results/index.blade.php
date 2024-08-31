<x-layout>
    <a href="/" class="decoration-solid decoration-white"><- Back to home</a>
    <h1 class="mt-20 text-6xl font-bold text-center">Results Job</h1>
    <div class="mt-6 space-y-6">
        @foreach($jobs as $job)
            <x-job-wide-card :$job/>
        @endforeach
    </div>
</x-layout>
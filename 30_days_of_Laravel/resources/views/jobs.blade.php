<x-layout>
    <x-slot:heading>Jobs page</x-slot:heading>
    <h1 class="mb-10 text-3rem">Welcome to jobs page</h1>
    @foreach($jobs as $job)
        <li><a class="text-1xl" href="/jobs/{{$job['id']}}">
                <strong>{{$job['title']}}:</strong>
                Pays {{$job['salary']}} per year.
            </a></li>
    @endforeach
</x-layout>
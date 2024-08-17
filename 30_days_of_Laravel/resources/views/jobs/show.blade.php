<x-layout>
    <x-slot:heading>
        Job: N° {{$job->id}}
    </x-slot:heading>
    <div class="flex flex-col gap-5 mb-10">
        <h2 class="text-4xl font-bold">{{$job['title']}}</h2>
        <span class="text-[1.2rem]"><span class="font-semibold">Pay per year: </span> {{$job['salary']}}</span>
    </div>
    <x-button href="/jobs/{{$job['id']}}/edit">Edit</x-button>

</x-layout>
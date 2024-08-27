<x-layout>
    <x-slot:heading>
        Job: N° {{$job->id}}
    </x-slot:heading>
    <div class="flex flex-col gap-5 mb-10">
        <h2 class="text-4xl font-bold">{{$job['title']}}</h2>
        <span class="text-[1.2rem]"><span class="font-semibold">Pay per year: </span> {{$job['salary']}}</span>
    </div>
    <div class="flex flex-row gap-4 items-center">
        @can ('destroy', $job)
            <button type="submit" form="job-delete" class="text-red-600 text-sm font-semibold">Delete</button>
        @endcan
        @can('edit', $job)
            <x-button href="/jobs/{{$job->id}}/edit">Edit</x-button>
        @endcan
    </div>

    <form id="job-delete" action="/jobs/{{$job->id}}" method="post">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
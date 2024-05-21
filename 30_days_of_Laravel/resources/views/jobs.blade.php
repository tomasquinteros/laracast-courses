<x-layout>
    <x-slot:heading>Jobs page</x-slot:heading>
    <div class="flex flex-col gap-10">
    @foreach($jobs as $job)
        <a class="flex flex-col gap-4 text-xl px-8 py-6 border-[1px] border-[#ccc] rounded-md transition-all hover:bg-[#ccc]
        hover:text-black
        hover:shadow-2xl"
           href="/jobs/{{$job['id']}}">
            <div class="flex flex-row gap-2">
                <span class=" font-bold">{{$job->employer->name}}</span>
                <div class="flex flex-row gap-2">
                    @foreach($job->tags as $tag)
                        <button class="bg-green-800 text-sm px-2 py-1 rounded-md">{{$tag->name}}</button>
                    @endforeach
                </div>
            </div>
            <strong class="text-4xl">{{$job['title']}}</strong>
            <span class="text-sm">Pays {{$job['salary']}} per year.</span>
        </a>
        @endforeach
    </div>
</x-layout>
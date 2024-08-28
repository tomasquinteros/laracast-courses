<x-layout>
    <x-slot:heading>Jobs page</x-slot:heading>
    <div class="flex flex-col gap-5">
    @foreach($jobs as $job)
        <a class="flex flex-col gap-1 text-xl px-8 py-4 border-[1px] border-[#ccc] rounded-md transition-all
        hover:text-black
        hover:shadow-md"
           href="/jobs/{{$job['id']}}">
            <div class="flex flex-row gap-2">
                <span class="text-blue-400 font-bold text-sm">{{$job->employer->name}}</span>
                <div class="flex flex-row gap-2">
                    @foreach($job->tags as $tag)
                        <button class="bg-green-800 text-sm px-2 py-1 rounded-md">{{$tag->name}}</button>
                    @endforeach
                </div>
            </div>
            <strong class="text-2xl">{{$job['title']}}: <span class="font-normal">Pays {{$job['salary']}} per year.</span></strong>

        </a>
        @endforeach
        {{$jobs->links()}}
    </div>
</x-layout>
@props(['job'])

<article
  class="flex flex-row gap-6 rounded-xl bg-white/10 p-4 hover:bg-white/25 transition-colors duration-300 group">

    <x-employer-logo :employer="$job->employer"/>
    <div class="flex flex-col justify-between">
        <div class="space-y-2">
            <span class="text-sm text-gray-400">{{$job->employer->name}}</span>
            <h2 class="text-2xl font-bold group-hover:text-blue-500 transition-colors duration-300 ">
                <a href="{{$job->url}}">
                    {{$job->title}}
                </a>
            </h2>
        </div>
        <span class="text-sm text-gray-400">{{$job->schedule}} - From {{$job->salary}}</span>
    </div>
    <div class="flex flex-col justify-between ml-auto items-end">
        <div class="mb-auto space-x-1">
            <a class="bg-white/10 font-medium hover:bg-white/20 transition-colors duration-300 inline-block rounded-xl text-xs px-2 py1"
               href="#">
                {{$job->location}}
            </a>
            <a class="bg-white/10 font-medium hover:bg-white/20 transition-colors duration-300 inline-block rounded-xl text-xs px-2 py1"
               href="#">
                22h
            </a>
        </div>
        <div class="flex flex-row items-end space-x-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>
    </div>
</article>
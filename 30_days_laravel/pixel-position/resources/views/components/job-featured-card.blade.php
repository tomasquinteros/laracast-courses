@props(['job'])
<article
  class="flex flex-col gap-8 p-4 bg-white/10 rounded-xl border-transparent border-2 hover:border-blue-700 transition-colors duration-300
  group">
    <div>
        <p class="text-sm">{{$job->employer->name}}</p>
    </div>
    <div class="font-bold text-center">
        <h2 class="text-2xl group-hover:text-blue-700 duration-300"><a href="{{$job->url}}">
                {{$job->title}}
            </a></h2>
        <p class="text-sm mt-2 font-normal">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center">
        <div class="flex flex-row mt-auto max-w-[80%] flex-wrap gap-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>
</article>
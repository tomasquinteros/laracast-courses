@props(['tag', 'size' => 'small'])
@php
    $class = "";
    if ($size === 'normal') {
        $class = "text-md px-4 py-1";
    } else {
        $class = "text-xs px-2 py1";
    }
@endphp

<a
  class="bg-white/10 font-medium hover:bg-white/20 transition-colors duration-300 inline-block rounded-xl {{$class}}"
  href="/tags/{{$tag->name}}">
    {{$tag->name}}
</a>
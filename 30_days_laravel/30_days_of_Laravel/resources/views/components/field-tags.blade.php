@props(['tags'])
@if(count($tags) > 0)
@foreach($tags as $tag)
    <a href="#">
        {{$tag->name}}
    </a>
@endforeach
@endif
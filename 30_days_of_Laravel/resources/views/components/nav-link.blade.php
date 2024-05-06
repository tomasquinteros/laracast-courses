@props(['active' => false])

<a {{$attributes}} class="p-2 transition-all rounded-md {{$active ? 'bg-slate-400' : ' hover:bg-slate-600'}}">{{$slot}}</a>
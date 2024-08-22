@props(['field'])

@error($field)
<span class="text-sm text-red-500 bold">{{$message}}</span>
@enderror
@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="{{$employer->id}}" class="inline-block rounded-xl" width="{{ $width }}" height="{{$width}}">
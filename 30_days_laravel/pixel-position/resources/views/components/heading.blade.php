@props(['size' => 'text-2xl'])

<h3 class="mb-6 mt-10 {{$size}}">
    <span class="w-2 h-2 bg-white inline-block"></span>
    {{$slot}}
</h3>
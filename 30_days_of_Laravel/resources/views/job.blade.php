<x-layout>
    <x-slot:heading>
        Job:{{$job['title']}}
    </x-slot:heading>
    <p><strong>{{$job['title']}}: </strong>pays {{$job['pay']}} per year.</p>
</x-layout>
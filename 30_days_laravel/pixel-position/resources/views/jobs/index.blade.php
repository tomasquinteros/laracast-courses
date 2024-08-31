<x-layout>

    <section class="mt-20 text-center">
        <h1 class="text-7xl font-bold">Let's Find Your Next Job</h1>
        <x-forms.form method="GET" action="/search">
            <x-forms.input name="q" placeholder="Web developer..."/>
        </x-forms.form>
    </section>


    <section>
        <x-heading>Jobs</x-heading>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
            @foreach($jobsFeatured as $job)
                <x-job-featured-card :$job/>
            @endforeach
        </div>
    </section>
    <section>
        <x-heading>Tags</x-heading>
        <div class="flex flex-row gap-2 flex-wrap max-w-[768px]">
            @foreach($tags as $tag)
                <x-tag :$tag :size="'normal'"/>
            @endforeach
        </div>
    </section>
    <section>
        <x-heading>Another Jobs</x-heading>
        <div class="mt-6 space-y-6">
            @foreach($jobs as $job)
                <x-job-wide-card :$job/>
            @endforeach
        </div>
    </section>
</x-layout>
<x-layout>
    <x-slot:heading>Edit {{$job->title}}</x-slot:heading>
    <form action="/jobs/{{$job->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create e new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you
                    share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label id="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input value="{{old('title', $job->title)}}" name="salary" id="salary" placeholder="$50,000 USD"
                                          required/>
                            <x-form-error :field={{"title"}}/>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label id="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input value="{{old('salary', $job->salary)}}" name="salary" id="salary" placeholder="$50,000 USD"
                                          required/>
                            <x-form-error :field={{"salary"}}/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between items-center">
            <button type="submit" form="job-delete" class="text-red-600 text-sm font-semibold">Delete</button>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs/{{$job->id}}"
                   class="rounded-md text-indigo-600 px-3 py-2 text-sm font-semibold                    focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Cancel
                </a>
                <x-form-button>Update</x-form-button>
            </div>
        </div>
    </form>
    <form id="job-delete" action="/jobs/{{$job->id}}" method="post">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
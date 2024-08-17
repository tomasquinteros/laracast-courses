<x-layout>
    <x-slot:heading>Job create</x-slot:heading>
    <form action="/jobs" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create e new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you
                    share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                              class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title" class="block flex-1 border-0
                                bg-transparent px-3 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm
                                sm:leading-6"
                                       placeholder="Programmer">
                            </div>
                            @error('title')
                            <span class="text-sm text-red-500 bold">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                              class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="salary" id="salary" class="block flex-1 border-0
                                bg-transparent px-3 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm
                                sm:leading-6"
                                       placeholder="$90.000 per Year">
                            </div>
                            @error('salary')
                            <span class="text-sm text-red-500 bold">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{--                @if($errors->any())
                                    <ul class="mt-5">
                                        @foreach($errors->all() as $error)
                                            <li class="text-red-500 text-xs italic">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif--}}
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save
            </button>
        </div>
    </form>

</x-layout>
<x-layout>
    <h1 class="mt-20 text-6xl font-bold text-center">Create Job</h1>
    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">
        <x-forms.input label="Title" name="title" placeholder="Programmer PHP..."/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.select name="schedule" label="Schedule">
            <option value="Full Time" class="bg-black">Full Time</option>
            <option value="Part Time" class="bg-black">Part Time</option>
        </x-forms.select>
        <x-forms.select name="location" label="Location">
            <option value="Full Time" class="bg-black">Remote</option>
            <option value="Part Time" class="bg-black">Hybrid</option>
            <option value="Part Time" class="bg-black">In Person</option>
        </x-forms.select>
        <x-forms.input label="URL Postulation" name="url"/>
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Developer, Architect, DevOps"/>
        <x-forms.divider/>
        <x-forms.button>Save Job</x-forms.button>
    </x-forms.form>
</x-layout>
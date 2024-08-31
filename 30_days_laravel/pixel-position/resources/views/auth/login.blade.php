<x-layout>
    <h1 class="mt-20 text-6xl font-bold text-center">Log In</h1>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.divider/>
        <div>
            <x-forms.button>Log in</x-forms.button>
            <a href="/register" class="text-white/80 block">Dont have an account? Click here!</a>
        </div>
    </x-forms.form>
</x-layout>
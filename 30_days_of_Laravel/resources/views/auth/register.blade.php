<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    <form action="/register" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label id="name">Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" id="name" placeholder="Jon Doe" required/>
                            <x-form-error :field={{"name"}}/>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label id="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" placeholder="example@email.com" required/>
                            <x-form-error :field={{"email"}}/>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label id="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" placeholder="****" required/>
                            <x-form-error :field={{"password"}}/>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label id="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="****"
                                          required/>
                            <x-form-error :field={{"password_confirmation"}}/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="rounded-md text-indigo-600 px-3 py-2 text-sm font-semibold focus-visible:outline
            focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Cancel
            </a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
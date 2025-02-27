<x-layouts.guest>
    <form action="/register" method="POST" class="bg-white p-8 rounded-xl shadow-lg border flex flex-col gap-4 w-1/3">
        @csrf
        <h1 class="text-center text-lg font-semibold">Registrovat</h1>

        @session('message')
        <p class="text-green-500">Registrace proběhla v pořádku</p>
        @endsession

        <x-input label="Jméno" type="text" name="name" />
        <x-input label="E-mail" type="email" name="email" />
        <x-input  label="Heslo" type="password" name="password"/>
        <x-button>Registrovat</x-button>
        
        <flux:text class="text-center">
            Pokud již máte účet, přihlaste se.
        </flux:text>

        <a href="/login">Pokud již máte účet, přihlaste se.</a>
    </form>
</x-layouts.guest>
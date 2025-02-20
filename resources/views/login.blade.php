<x-layouts.guest>
    <form action="/login" method="POST" class="bg-white p-8 rounded-xl shadow-lg border flex flex-col gap-4 w-1/3">
        @csrf
        <h1 class="text-center text-lg font-semibold">Přihlásit se</h1>
        <x-input label="E-mail" type="email" name="email" />
        <x-input label="Heslo" type="password" name="password" />
        <x-button>Login</x-button>
        <a href="/register">Ještě nemáte učet? Založte si ho.</a>
    </form>

</x-layouts.guest>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-t from-zinc-300 to-zinc-50 flex items-center justify-center h-screen">
    
    <form action="/register" method="POST" class="bg-white p-8 rounded-xl shadow-lg border flex flex-col gap-4 w-1/3">
        
        @csrf
        <h1 class="text-center text-lg font-semibold">Registrovat</h1>

        @session('message')
        <p class="text-green-500">Registrace proběhla v pořádku</p>
        @endsession

        <label for="name" class="text-sm text-gray-600">Jméno</label>
        <input type="text" name="name" class="border p-2">
        <label for="email" class="text-sm text-gray-600">E-mail</label>
        <input type="email" name="email" class="border p-2">
        <label for="password" class="text-sm text-gray-600">Heslo</label>
        <input type="password" name="password" class="border p-2">
        <button class="bg-slate-800 text-white px-4 py-2 rounded-xl" type="submit">Registrovat</button>
    </form>

</body>
</html>
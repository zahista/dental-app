<x-layouts.app>

    <div class="p-8">

        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold text-gray-900">Přehled všech uživatelů</h1>
                    <p class="mt-2 text-sm text-gray-700">Přehled všech uživatelů aplikace.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">


                    <flux:modal.trigger name="create-appointment">
                        <div class="p-4">
                            <flux:button variant="primary">Vytvořit registraci</flux:button>
                        </div>
                    </flux:modal.trigger>


                    <flux:modal name="create-appointment" variant="flyout" class="space-y-6">
                        <div>
                            <flux:heading size="lg">Přidat nového uživatele</flux:heading>

                        </div>

                        <form action="/patients" method="post" class="space-y-4">
                            @csrf

                            <flux:input label="Jméno a příjmení" placeholder="Josef Novák" name="name" />
                            <flux:input label="E-mail" name="email" placeholder="admin@admin.cz" />
                            <flux:input label="Heslo" name="password" />
                            <input type="hidden" value="patient" name="role">

                            <div class="flex">
                                <flux:spacer />
                                <flux:button type="submit" variant="primary">Uložit pacienta do DB</flux:button>
                            </div>
                        </form>

                    </flux:modal>

                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Name</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        E-mail</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Role</th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Návštěvy</th>

                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">

                                @foreach ($users as $user)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                            {{ $user->id }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $user->name }}
                                        </td>

                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $user->email }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $user->role }}</td>

                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $user->appointments->whereNotNull('start_at')->count() }} /
                                            {{ $user->appointments->count() }}</td>

                                        <td>
                                            <flux:modal.trigger :name="'edit-profile-'.$user->id">
                                                <div class="p-4">
                                                    <flux:button variant="ghost">edit</flux:button>
                                                </div>
                                            </flux:modal.trigger>


                                            <flux:modal :name="'edit-profile-'.$user->id" class="space-y-6 w-2/3">
                                                <div>
                                                    <flux:heading size="lg">Vytvořit</flux:heading>
                                                </div>

                                                <form action="/roles" method="post" class="space-y-4">
                                                    @csrf

                                                    <flux:input label="Jméno a příjmení" placeholder="Your name" name="name" value="{{$user->name}}" />
                                                    <flux:input label="E-mail" placeholder="Your name" name="email" value="{{$user->email}}" />
                                                        

                                                    <select name="role">
                                                        @foreach ($roles as $role)
                                                        <option value="{{$role}}" @selected($role == $user->role) >{{$role}}</option>
                                                        @endforeach
                                                    </select>

                                                    <input type="hidden" name="user_id" value={{$user->id}}>

                                                    <flux:button variant="primary" type="submit">Uložit změny</flux:button>
                                                </form>

                                            </flux:modal>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

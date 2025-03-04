<x-layouts.app>

    <div class="p-8">

        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold text-gray-900">Ceník</h1>
                    <p class="mt-2 text-sm text-gray-700">Přehled všech ceníkových položek, které jsou dostupné na naši klinice.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">


                    <flux:modal.trigger name="create-appointment">
                        <div class="p-4">
                            <flux:button variant="primary">Přidat položku</flux:button>
                        </div>
                    </flux:modal.trigger>


                    <flux:modal name="create-appointment" variant="flyout" class="space-y-6">
                        <div>
                            <flux:heading size="lg">Přidat novou položku do ceníku</flux:heading>
                            <flux:subheading>
                                Vytvoř novou položku do ceníku. Archivované a připravované zákroky s nenabízí při
                                vyváření zákroku pro danou návštěvu.
                            </flux:subheading>
                        </div>

                        <form action="/treatment_types" method="post" class="space-y-4">
                            @csrf

                            <flux:input label="Název položky" placeholder="Fotokompozi vel. II" name="title" />
                            <flux:input label="Krátky popis" name="description" />
                            <flux:input label="Cena" name="price" />
                            <flux:input label="Časová náročnost" name="minutes" />

                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="is_paid" id="is_paid">
                                <label for="is_paid">
                                    <flux:text>Hradí pacient</flux:text>
                                </label>
                            </div>

                            <input type="radio" id="html" name="status" value="active">
                            <label for="html">Aktivní</label><br>
                            <input type="radio" id="css" name="status" value="archived">
                            <label for="css">Archivovaný</label><br>
                            <input type="radio" id="javascript" name="status" value="planned">
                            <label for="javascript">Plánujeme</label>
                           

                            <div class="flex my-8">
                                <flux:button type="submit" variant="primary">Přidat položku do ceníku</flux:button>
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
                                        Název</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Popisek</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Cena</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Časová dotace</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Platí pacient?</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Status</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">


                                @foreach ($treatment_types as $type)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                            {{ $type->id }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $type->title }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $type->description }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $type->price }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $type->minutes }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            @if ($type->is_paid)
                                                <flux:icon.check />
                                            @endif
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <flux:badge color="{{$type->status == 'active' ? 'lime' : ''}}">{{ $type->status }}</flux:badge>
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                    class="sr-only">, Lindsay Walton</span></a>
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

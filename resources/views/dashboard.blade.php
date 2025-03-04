<x-layouts.app title="Přehled návštěv">

    <div class="flex justify-end p-8" id="pokus">

        @if (auth()->user()->role == 'doctor')
        <flux:modal.trigger name="create-appointment">
            <div class="p-4">
                <flux:button variant="primary">Vytvořit návštěvu</flux:button>
            </div>
        </flux:modal.trigger>


        <flux:modal name="create-appointment" variant="flyout" class="space-y-6">
            <div>
                <flux:heading size="lg">Vytvořit</flux:heading>
                <flux:subheading>Vyberte preferovaný termin a lekáře. Pokud návštěvu potvrdíme, zašleme vám email.
                </flux:subheading>
            </div>

            <form action="/appointment" method="post" class="space-y-4">
                @csrf
                <flux:input label="Název návštěvy" placeholder="Your name" name="title" />
                <flux:input label="Popisek" name="description" />
                <flux:input label="Poznámka" name="notes" />

                <input type="hidden" name="user_id" value="{{$user->id}}">

                <div class="flex">
                    <flux:spacer />
                    <flux:button type="submit" variant="primary">Save changes</flux:button>
                </div>
            </form>

        </flux:modal>
        @endif
    </div>


    <div class="p-8">
        @foreach ($user->appointments as $appointment)
            <a href="   {{ route('appointment.show', ['appointment' => $appointment->id]) }}">
                <div class="bg-white p-4 border-b mb-2 flex justify-between">
                    <div>
                        <flux:heading>{{ $appointment->title }}</flux:heading>
                        <flux:subheading>{{ $appointment->description }}</flux:subheading>

                        <div class="flex items-center gap-4 mt-4">
                            <flux:badge color="{{$appointment->start_at ? 'lime' : ''}}" icon="calendar-days">{{ $appointment->start_at ?? 'Nenaplánováno' }}
                            </flux:badge>
                        </div>
                    </div>
            </a>

            <flux:spacer />

            @empty($appointment->start_at)
            <form action="/appointment_edit" method="post">
                @csrf
                <flux:modal.trigger :name="'edit-appointment-'.$appointment->id">
                    <flux:tooltip content="Naplánovat návštěvu">
                        <flux:button icon="calendar" icon-variant="outline" />
                    </flux:tooltip>
                </flux:modal.trigger>

                <flux:modal :name="'edit-appointment-'.$appointment->id" class="md:w-96">
                    <div class="space-y-6">
                        <div>
                            <flux:heading size="lg">Vyberte datum návštěvy</flux:heading>
                            <flux:subheading>Naplánujte svou další návštěvu.</flux:subheading>
                        </div>

                        <flux:input label="Preferovaný datum návštěvy" type="date" name="start_at" />
                        <input type="hidden" name="appointment_id" value="{{$appointment->id}}" />

                        <div class="flex">
                            <flux:spacer />

                            <flux:button type="submit" variant="primary">Save changes</flux:button>
                        </div>
                    </div>
                </flux:modal>
            </form>
            @endempty
    </div>

    @endforeach
    </div>

</x-layouts.app>

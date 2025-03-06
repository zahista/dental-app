<x-layouts.app title="Detail návštěvy">

    <div class="p-8">
        <flux:heading level="2">{{ $appointment->title }}</flux:heading>
        <flux:subheading>{{ $appointment->description }}</flux:subheading>

        <flux:separator class="my-4" />
    </div>

    <div class="flex p-8 bg-zinc-50">
        <x-odontogram />

        <div class="w-1/2 flex-1">
            @foreach ($appointment->treatments as $treatment)
                <x-treatment :treatment="$treatment" />
            @endforeach
        </div>

        <flux:modal.trigger name="create-treatment">
            <div class="p-4">
                <flux:button variant="primary">Vytvořit zákrok</flux:button>
            </div>
        </flux:modal.trigger>


        <flux:modal name="create-treatment" class="space-y-6 w-2/3">
            <div>
                <flux:heading size="lg">Vytvořit</flux:heading>
            </div>

            <form action="/treatment" method="post" class="space-y-4">
                @csrf

                <flux:input label="Název zákroku" placeholder="Your name" name="title" />
                <flux:input label="Popisek" name="description" />

                <select name="tooth">
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>


                <select name="type_id">
                    @foreach ($treatment_types as $type)
                        <option value="{{ $type->id }}">{{ $type->title }} | {{ $type->description }}</option>
                    @endforeach
                </select>

                <select name="doctor_id">
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}
                        <option>
                    @endforeach
                </select>

                <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                <input type="hidden" name="user_id" value="{{ $appointment->user->id }}">

                <div class="flex">
                    <flux:button type="submit" variant="primary">Save changes</flux:button>
                </div>
            </form>

        </flux:modal>


    </div>

</x-layouts.app>

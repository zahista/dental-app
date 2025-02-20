<x-layouts.app title="Detail návštěvy" :user="auth()->user()">

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
    </div>

</x-layouts.app>

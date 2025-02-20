<x-layouts.app title="Přehled návštěv" :user="auth()->user()">

    <div class="flex justify-end"> 
        <flux:modal.trigger name="edit-profile">
            <div class="p-4">
                <flux:button>Objednat návštěvu</flux:button>
            </div>
        </flux:modal.trigger>
        
        <flux:modal name="edit-profile" variant="flyout" class="space-y-6">
            <div>
                <flux:heading size="lg">Objednejte se</flux:heading>
                <flux:subheading>Vyberte preferovaný termin a lekáře. Pokud návštěvu potvrdíme, zašleme vám email.</flux:subheading>
            </div>
        
            <flux:input label="Name" placeholder="Your name" />
        
            <flux:input label="Date of birth" type="date" />
        
            <div class="flex">
                <flux:spacer />
        
                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </flux:modal>
    </div>


    <div class="p-8">
        @foreach ($appointments as $appointment)
            <a href="">
                <div class="bg-white p-4 border-b mb-2">
                    <flux:heading>{{$appointment->title}}</flux:heading>
                    <flux:subheading>{{$appointment->description}}</flux:subheading>

                    <div class="flex items-center gap-4 mt-4">
                        <flux:badge icon="calendar-days">{{$appointment->start_at}}</flux:badge>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-layouts.app>

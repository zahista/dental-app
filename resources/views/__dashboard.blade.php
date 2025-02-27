<x-layouts.app>

 <section id="patient-info" class="flex justify-between p-6">
    <div class="flex items-center gap-4">
        <img src="../avatar.avif" alt="" class="w-16 h-16 rounded-full">

        <div>
            <h3 class="text-lg font-semibold">Willie Jennie</h3>
            <div class="bg-zinc-50 border rounded-sm px-4 py-2 flex items-center gap-16 text-gray-400 text-sm">
                <p>Have uneven jawline</p>
                <button class="text-yellow-700 font-semibold">Edit</button>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-2">
        <button
            class="bg-yellow-400 hover:bg-yellow-500 text-zinc-900 text-sm rounded-full px-4 py-2">Create
            appoitment</button>
        <button class="bg-zinc-50 border rounded-lg p-3 flex items-center justify-center">
            <x-lucide-ellipsis-vertical class="w-4 h-4 text-gray-500"/>
        </button>
    </div>
</section>


<section id="detail">
    <nav>
        <ul class="flex gap-6 border-b px-6">
            <li class="text-yellow-500 border-b-2 border-yellow-500 pb-4">Patien Information</li>
            <li class="text-gray-400">Appointment History</li>
            <li class="text-gray-400">Next Treatment</li>
            <li class="text-gray-400">Medical Record</li>
        </ul>
    </nav>

    <div class="flex items-center w-1/3 gap-4 my-4 px-6">
        <h4 class="font-semibold text-lg">Service</h4>
        <div
            class="relative inline-grid items-center justify-center w-full h-10 grid-cols-2 p-1 text-gray-500 bg-gray-100 rounded-lg select-none">

            <button type="button"
                class="relative z-20 inline-flex items-center justify-center w-full h-6 px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap text-sm">Medical</button>

            <button type="button"
                class="relative z-20 inline-flex items-center justify-center w-full h-6 px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap text-sm">Cosmetic</button>

            <div x-ref="tabMarker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out">
                <div class="w-full h-full bg-white rounded-md shadow-sm"></div>
            </div>
        </div>
    </div>



    <div id="odontogram" class="border flex mx-6 rounded-lg overflow-hidden max-h-[600px]">

        <x-odontogram />

        <div class="bg-zinc-50 flex-1 p-6 overflow-y-auto">

            <div class="flex items-center gap-4">
                <div class=" border border-yellow-500 rounded-lg p-2 flex items-center gap-2">
                    <x-icons.teeth />
                    <p class="text-xs font-semibold text-yellow-500">22</p>
                </div>
                <h5 class="text-xl font-semibold">Maxillary Left Lateral Incisor</h5>
            </div>

            <x-treatment />
            <x-treatment />
            <x-treatment />
            <x-treatment />
            <x-treatment />
           
        </div>

    </div>

</section>

</x-layouts.app>
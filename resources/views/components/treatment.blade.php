<article class="border rounded-lg p-4 bg-white flex ml-6 gap-8 my-4">
    <div>
        <h5 class="text-gray-400 text-xs uppercase">MED</h5>
        <p class="text-xl font-semibold">03</p>
    </div>

    <div class="flex-1">
        <div class="flex gap-4 justify-between">

            <div class="flex gap-16">

                <div>
                    <h5 class="text-gray-400 text-xs uppercase">Označení zubu</h5>
                    <p>{{ $treatment->tooth }}</p>
                </div>

                <div>
                    <h5 class="text-gray-400 text-xs uppercase">Typ zákroku</h5>
                    <p>{{ $treatment->type->title }}</p>
                </div>


                <div>
                    <h5 class="text-gray-400 text-xs uppercase">Zubař</h5>
                    <p>{{ $treatment->doctor->name }}</p>
                </div>

            </div>



            <span class="text-green-500 text-sm font-semibold flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-check">
                    <path d="M20 6 9 17l-5-5" />
                </svg>
                Status
            </span>
        </div>


        <div class="bg-zinc-100 rounded-lg p-4 flex items-center gap-4 border my-4 text-gray-400 text-sm">

            <div class="flex gap-4">
                <flux:icon.document />
                <p>{{$treatment->description}}</p>
            </div>
        </div>


    </div>
</article>

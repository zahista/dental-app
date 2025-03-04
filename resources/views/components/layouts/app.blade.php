<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>

<body>
    
    <!--  Tohle to je HTML komentář  -->

    <div class="flex h-screen">

        <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />

        <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="/" current>Přehled</flux:navlist.item>
            <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
            <flux:navlist.item icon="document-text" href="#">Dokumenty</flux:navlist.item>

            <flux:navlist.group expandable heading="Klinika" class="hidden lg:grid">
                <flux:navlist.item href="{{route('patients.index')}}">Přehled pacientů</flux:navlist.item>
                <flux:navlist.item href="{{route('treatment_type.index')}}">Ceník</flux:navlist.item>
                <flux:navlist.item href="#">Nastavení rolí</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="cog-6-tooth" href="#">Nastavení</flux:navlist.item>
        </flux:navlist>

        <flux:dropdown position="top" align="start" class="max-lg:hidden">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="Olivia Martin" />

            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                    <flux:menu.radio>Truly Delta</flux:menu.radio>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>


        <main class="bg-white flex-1">

            <!--  Tohle header  -->

            <header class="lg:flex justify-between p-4 border-b">

                <h1 class="font-medium text-2xl">{{$title ?? ""}}</h1>




                <div class="lg:flex block items-center gap-6 space-y-4 lg:space-y-0">


                    <div class="flex items-center gap-2">

                        <div class="flex items-center gap-2 bg-zinc-100 rounded-full border border-zinc-300 p-2">
                            <svg class="text-zinc-400 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-search">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                            <input placeholder="Search patient..." type="search"
                                class="bg-zinc-100 focus:outline-hidden">
                        </div>


                        <button
                            class="bg-yellow-500 w-10 h-10 text-white rounded-full flex items-center justify-center text-xl hover:bg-yellow-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                                <path d="M5 12h14" />
                                <path d="M12 5v14" />
                            </svg>
                        </button>
                    </div>




                    <div class="flex gap-2 *:text-zinc-400 *:size-5 lg:px-4 border-r">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-help">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-activity">
                            <path
                                d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-settings">
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>



                    <div class="flex gap-2 items-center border-r lg:px-4">
                        <div class="w-8 h-8 p-2 rounded-full bg-green-200 flex items-center justify-center">

                            <svg class="text-green-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd"
                                    d="M3 2.25a.75.75 0 0 1 .75.75v.54l1.838-.46a9.75 9.75 0 0 1 6.725.738l.108.054A8.25 8.25 0 0 0 18 4.524l3.11-.732a.75.75 0 0 1 .917.81 47.784 47.784 0 0 0 .005 10.337.75.75 0 0 1-.574.812l-3.114.733a9.75 9.75 0 0 1-6.594-.77l-.108-.054a8.25 8.25 0 0 0-5.69-.625l-2.202.55V21a.75.75 0 0 1-1.5 0V3A.75.75 0 0 1 3 2.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <span>1/4</span>
                    </div>


                    <div class="flex items-center gap-4">
                        <img src="../avatar.avif" alt="" class="w-8 h-8 rounded-full">
                        <div>
                            <p class="text-gray-700 text-sm">{{auth()->user()->name}}</p>
                            <p class="text-gray-400 text-xs">{{auth()->user()->role}}</p>
                        </div>

                        <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6" />
                        </svg>

                    </div>

                </div>

            </header>

            {{ $slot }}

        </main>
    </div>
    @fluxScripts
</body>

</html>

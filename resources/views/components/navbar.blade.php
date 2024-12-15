<nav class="bg-white bg-opacity-95 backdrop-blur-sm sticky top-0 z-50 border-b border-gray-300" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-24 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-16" src="{{ asset('images/logo-umpri.png') }}" alt="Logo Umpri">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-nav-link href='/' :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href='/about' :active="request()->is('about')">Tentang Kami</x-nav-link>
                        <x-nav-link href='/kegiatan' :active="request()->is('kegiatan')">Kegiatan</x-nav-link>
                        <x-nav-link href='/contact' :active=" request()->is('contact')">Berita</x-nav-link>
                        <x-nav-link href='/pembelajaran' :active=" request()->is('pembelajaran')">Pembejaran</x-nav-link>
                        <!-- 
                        <x-nav-link href='/test' :active=" request()->is('test')">Test</x-nav-link>
                        -->
                    </div>
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-black hover:bg-gray-300 hover:text-white " aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
        </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="py-3 flex flex-col mx-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href='/' :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href='/about' :active="request()->is('about')">Tentang Kami</x-nav-link>
            <x-nav-link href='/kegiatan' :active="request()->is('kegiatan')">Kegiatan</x-nav-link>
            <x-nav-link href='/contact' :active=" request()->is('contact')">Berita</x-nav-link>
            <x-nav-link href='/pembelajaran' :active=" request()->is('pembelajaran')">Pembejaran</x-nav-link>
            <!-- 
            <x-nav-link href='/test' :active=" request()->is('test')">Test</x-nav-link>
            -->
        </div>
        </div>
    </nav>
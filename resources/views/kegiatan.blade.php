<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white rounded-lg">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl py-8 sm:py-8 lg:max-w-none lg:py-8">      
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
              
            @foreach ($kegiatans as $kegiatan)
              <div class="group relative mb-8 z-10">
                <img 
                src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg" 
                alt="" 
                class="w-full rounded-lg bg-white object-cover group-hover:opacity-75 max-sm:h-80 sm:aspect-[2/1] lg:aspect-square">
                <h3 class="mt-6 text-sm text-gray-500">
                  <a href="/kegiatan/{{ $kegiatan['slug'] }}">
                    <span class="absolute inset-0"></span>
                    {{ $kegiatan['tanggal'] }}
                  </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">
                  {{ $kegiatan['judul'] }}
                </p>
              </div>
            @endforeach
              
            </div>
          </div>
        </div>
      </div>
      
      
</x-layout>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Carousel Body -->
    <div class="relative block md:flex items-center bg-white shadow-md" style="min-height: 19rem;">
        
        <div
          x-data = "homeCarousel()"
          class="relative w-full h-full md:w-7/12 overflow-hidden" 
          style="min-height: 19rem;">
          @foreach ($images as $index => $image)
            <img
              src="{{ $image }}"
              alt="Carousel Image"
              class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-1000"
              :class="currentIndex === {{ $index }} ? 'opacity-100' : 'opacity-0'"
            >
          @endforeach
        </div>

        <div class="w-full h-full md:w-5/12 flex items-center bg-white rounded-lg">
          <div class="p-12 md:pr-24 md:pl-16 md:py-12">
            <p class="text-gray-600"><span class="text-gray-900">
                <span class="font-bold text-3xl">ULD UMPRI </span>
                <hr class="my-3 w-full mx-0 border-gray-300">
                Unit Layanan Disabilitas Universitas Muhammadiyah Pringsewu
            </p>
            <a href="/about" class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" >
              <span>Learn more</span>
              <span class="text-xs ml-1">&#x279c;</span>
            </a>
          </div>
          <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
        </div>
      </div>

      <!-- Section berita -->
      <div class="bg-white py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Selamat datang di website ULD Umpri</h2>
            <p class="mt-4 text-lg/8 text-gray-600">"Memberikan Akses, Menciptakan Peluang, dan Mewujudkan Kehidupan yang Lebih Inklusif bagi Semua"</p>
          </div>
          <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-8 sm:mt-8 sm:pt-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            
            <article class="flex max-w-xl flex-col items-start justify-between">
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Boost your conversion rate
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
              </div>
              <div class="relative mt-8 flex items-center gap-x-4">
                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-50">
                <div class="text-sm/6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Michael Foster
                    </a>
                  </p>
                  <p class="text-gray-600">Co-Founder / CTO</p>
                </div>
              </div>
            </article>
      
            <!-- More posts... -->
          </div>
        </div>
      </div>
      

      <script>
        document.addEventListener('alpine:init', () => {
          Alpine.data('homeCarousel', () => ({
            currentIndex: 0,
            init() {
              // Automatically cycle through images
              setInterval(() => {
                this.nextImage();
              }, 3000);
            },
            nextImage() {
              // Move to the next image, or loop back to the first
              this.currentIndex = (this.currentIndex + 1) % {{ count($images) }};
            },
          }));
        });
      </script>
</x-layout>
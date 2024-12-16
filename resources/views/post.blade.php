<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
  }
  ```
-->
<div class="bg-white">
    <div class="pt-6">
      <nav aria-label="Breadcrumb">
        <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <li>
            <div class="flex items-center">
              <a href="#" class="mr-2 text-sm font-medium text-gray-900">Kegiatan</a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>
          
          <li class="text-sm">
            <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{$title}}</a>
          </li>
        </ol>
      </nav>
  
      <!-- Image gallery -->
      <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
        <img src="{{ $kegiatan['images'][0] }}" alt="Two each of gray, white, and black shirts laying flat." class="hidden aspect-[3/4] size-full rounded-lg object-cover lg:block">
        <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
          <img src="{{ $kegiatan['images'][1] }}" alt="Model wearing plain black basic tee." class="aspect-[3/2] size-full rounded-lg object-cover">
          <img src="{{ $kegiatan['images'][2] }}" alt="Model wearing plain gray basic tee." class="aspect-[3/2] size-full rounded-lg object-cover">
        </div>
        <img src="{{ $kegiatan['images'][3] }}" alt="Model wearing plain white basic tee." class="aspect-[4/5] size-full object-cover sm:rounded-lg lg:aspect-[3/4]">
      </div>
  
      <!-- Product info -->
      <div class="mx-auto max-w-2xl px-4 pb-8 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pb-8 lg:pt-16">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$title}}</h1>
        </div>
  
        <!-- Options -->
   
        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-4 lg:pr-8 lg:pt-6">
          <!-- Description and details -->
          <div>  
            <div class="space-y-6">
              <p class="text-base text-gray-900">
                {{ $kegiatan['body'] }}
              </p>
            </div>
          </div>
          
          <!-- 
          <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
  
            <div class="mt-4">
              <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>
                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
              </ul>
            </div>
          </div>
          -->
          <div class="mt-10">
            <a href="/kegiatan" class="font-medium text-blue-500 hover:underline relative bottom-0 box-border">
                &laquo; Kembali ke Kegiatan
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
    
    
    
   
</x-layout>
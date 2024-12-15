@props(['active' => false])

<a {{ $attributes }} href="/" 
class="{{ $active ? ' text-black' : 'text-gray-300 hover:text-black' }}
rounded-md px-4 py-3 text-m font-small" 
aria-current="{{ $active ? 'page' : false}}"
>{{ $slot }}</a>

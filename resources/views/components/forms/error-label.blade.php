@props(['label'])
<span class="flex items-center gap-2 text-lg">
<svg class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
</svg>
<span class="font-medium text-red-600">{{$errors->first($label)}}</span>
</span>

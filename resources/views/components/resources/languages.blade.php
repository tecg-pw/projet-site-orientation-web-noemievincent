@props([
    'slug',
    'name'
])
<li><a href="#" id="{{$slug}}"
       class="tag rounded py-1 px-3 text-white hover:bg-gradient-to-b from-black/30 to-black/30 transition-bg ease-in-out duration-200">{{$name}}</a>
</li>

@props([
    'url'
])
<div class="flex flex-col gap-4">
    <div class="flex gap-6 items-center col-span-2">
        <p class="uppercase text-lg">{{__('filters.title')}}</p>
        <a href="{{$url}}" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
    </div>
    <div class="lg:grid lg:grid-cols-3 lg:gap-4">
        <form class="flex flex-col gap-2 sm:col-span-2">
            <div class="flex gap-3">
                {{ $slot }}
            </div>
            <button type="submit"
                    class="self-start font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transitionable">
                {{__('filters.filter_button')}}
            </button>
        </form>
        <x-filters.search :action="$url"/>
    </div>
</div>

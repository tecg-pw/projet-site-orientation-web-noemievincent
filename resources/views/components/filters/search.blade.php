@props([
    'action'
])
<form action="{{$action}}" method="get"
      class="flex col-start-3 rounded-lg focus-within:outline focus-within:outline-1 focus-within:outline-orange max-h-[34px]">
    <label for="search_term" class="h-full flex-1">
        <span class="sr-only">{{__('filters.titles.search')}}</span>
        <input placeholder="{{__('filters.titles.search')}}" type="search" id="search_term" name="search_term" value="{{request()->input('search_term') ?? ''}}"
               class="h-full w-full pl-3 py-1 bg-orange-light/20 border border-orange-light border-r-0 focus:outline-none rounded-l-lg placeholder:font-light transition ease-in-out duration-200">
    </label>
    <button
        class="bg-orange text-white px-3 rounded-r-lg uppercase hover:bg-orange-dark transition ease-in-out duration-200 lg:h-full">
        <svg version="1.1" id="search_term_svg" xmlns="http://www.w3.org/2000/svg"
             x="0px" y="0px" height="18"
             viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve"
             class="fill-white">
                            <path d="M20.6,19.1c4.1-4.9,3.5-12.3-1.5-16.4S6.8-0.8,2.7,4.2s-3.5,12.3,1.5,16.4c2.1,1.8,4.7,2.7,7.5,2.7
                        c2.7,0,5.4-1,7.5-2.7l9.1,9.1c0.4,0.4,1.1,0.4,1.5,0c0.4-0.4,0.4-1.1,0-1.5L20.6,19.1z M11.6,21.2c-5.3,0-9.5-4.3-9.5-9.5
                        s4.3-9.5,9.5-9.5s9.5,4.3,9.5,9.5C21.2,16.9,16.9,21.2,11.6,21.2C11.6,21.2,11.6,21.2,11.6,21.2z"/>
                </svg>
        <span class="sr-only">
                            {{__('filters.search_button')}}
                        </span></button>
</form>

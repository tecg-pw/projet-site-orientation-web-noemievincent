<x-header :head_title="'resources.tutorials.head_title'"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="tutorials" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="tutorials"
                    class="h2">{{__('resources.tutorials.title')}}</h2>
                <p class="text-lg ">{{__('resources.tutorials.tagline')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="lg:grid lg:grid-cols-3 lg:gap-x-11">
                    <div class="flex gap-6 items-center col-span-2">
                        <p class="uppercase text-lg">{{__('filters.title')}}</p>
                        <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                    </div>
                    <x-filters.search :element="'tutorials'"/>
                </div>
                <form class="flex flex-col gap-2 sm:flex-row sm:col-span-2 sm:items-center sm:justify-between">
                    @csrf
                    <div class="flex gap-4">
                        <x-filters.languages :languages="$languages"/>
                    </div>
                    <button type="submit"
                            class="self-start font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                        {{__('filters.filter_button')}}
                    </button>
                </form>
            </div>
            <div class="flex flex-col gap-20">
                <div class="flex flex-col gap-6 justify-items-center sm:grid sm:grid-cols-2 sm:gap-8">
                    @foreach($tutorials as $tutorial)
                        <x-resources.tutorial
                            :tutorial="$tutorial->translations->where('locale', app()->getLocale())->first()"
                            :languages="$tutorial->languages"
                            is_favorite="false"/>
                    @endforeach
                </div>
                <div>
                    {{$tutorials->links()}}
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

<x-header :head_title="'alumnis.head_title'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="alumnis" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="alumnis"
                    class="h2">{{__('alumnis.title')}}</h2>
                <p class="text-lg ">{{__('alumnis.tagline')}}</p>
            </div>
            <div class="flex flex-col gap-4">
                <div class="lg:grid lg:grid-cols-3 lg:gap-4">
                    <div class="flex gap-6 items-center col-span-2">
                        <p class="uppercase text-lg">{{__('filters.title')}}</p>
                        <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                    </div>
                    <x-filters.search :element="'alumnis'"/>
                </div>
                <form class="flex flex-col gap-2 sm:flex-row sm:col-span-2 sm:items-center sm:justify-between">
                    @csrf
                    <div class="flex gap-3">
                        <x-filters.date :dates="$dates" :property="'end_year'" :format="'Y'"/>
                    </div>
                    <button type="submit"
                            class="self-start font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transitionable">
                        {{__('filters.filter_button')}}
                    </button>
                </form>
            </div>
            <div class="flex flex-col gap-8">
                <div class="flex flex-col justify-items-center gap-8 sm:grid sm:grid-cols-2 md:grid-cols-3">
                    @foreach($alumnis as $alumni)
                        <x-alumnis.card :alumni="$alumni->translations->where('locale', app()->getLocale())->first()"/>
                    @endforeach
                </div>
                <div>
                    {{$alumnis->links()}}
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

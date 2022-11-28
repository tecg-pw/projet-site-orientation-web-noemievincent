<x-header :head_title="'jobs.partners.head_title'"/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="partners" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="partners"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('jobs.partners.title')}}</h2>
                <p class="text-lg ">{{__('jobs.tagline')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-12 col-span-2">
                    <a href="/jobs/offers"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.offers')}}</a>
                    <a href="/jobs/partners"
                       class="uppercase text-lg text-orange font-bold">{{__('jobs.tabs.partners')}}</a>
                    <a href="/jobs/create"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.create')}}</a>
                </div>
                <div class="grid grid-cols-3 gap-x-11">
                    <div class="flex gap-6 items-center col-span-2">
                        <p class="uppercase text-lg">{{__('filters.title')}}</p>
                        <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                    </div>
                    <x-filters.search/>
                </div>
                <form class="flex col-span-2 items-center justify-between">
                    @csrf
                    <div class="flex gap-4">
                        <x-filters.jobs-agencies/>
                        <x-filters.jobs-locations/>
                        {{--                        <x-filters.date :dates="$dates" :property="'end_year'" :format="'Y'"/>--}}
                    </div>
                    <button type="submit"
                            class="font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                        {{__('filters.filter_button')}}
                    </button>
                </form>
            </div>
            <div class="flex flex-col gap-20">
                <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                    @for($i = 0; $i < 9; $i++)
                        <x-partners.article/>
                    @endfor
                </div>
                <div class="bg-pink-200">
                    PAGINATION
                </div>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

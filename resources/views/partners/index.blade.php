<x-header :head_title="'jobs.partners.head_title'"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="partners" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="partners"
                    class="h2">{{__('jobs.partners.title')}}</h2>
                <p class="text-lg ">{{__('jobs.tagline')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class=" col-span-2 flex flex-col gap-2 md:flex-row md:gap-12">
                    <a href="/{{app()->getLocale()}}/jobs/offers"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.offers')}}</a>
                    <a href="/{{app()->getLocale()}}/jobs/partners"
                       class="uppercase text-lg text-orange font-bold">{{__('jobs.tabs.partners')}}</a>
                    <a href="/{{app()->getLocale()}}/jobs/create"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.create')}}</a>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="lg:grid lg:grid-cols-3 lg:gap-x-11">
                        <div class="flex gap-6 items-center col-span-2">
                            <p class="uppercase text-lg">{{__('filters.title')}}</p>
                            <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                        </div>
                        <x-filters.search/>
                    </div>
                    <form class="flex flex-col gap-2 sm:flex-row sm:col-span-2 sm:items-center sm:justify-between">
                        @csrf
                        <div class="flex flex-col gap-2 sm:flex-row sm:gap-4">
                            <x-filters.jobs-agencies :companies="$companies"/>
                            <x-filters.jobs-locations :locations="$locations"/>
                            {{--                        <x-filters.date :dates="$dates" :property="'end_year'" :format="'Y'"/>--}}
                        </div>
                        <button type="submit"
                                class="self-start font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                            {{__('filters.filter_button')}}
                        </button>
                    </form>
                </div>
            </div>
            <div class="flex flex-col gap-20">
                <div
                    class="flex flex-col gap-4 justify-items-center sm:grid sm:grid-cols-2 sm:gap-6 lg:grid-cols-3">
                    @foreach($partners as $partner)
                        <x-partners.article
                            :partner="$partner->translations->where('locale', app()->getLocale())->first()"/>
                    @endforeach
                </div>
                <div>
                    {{$partners->links()}}
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

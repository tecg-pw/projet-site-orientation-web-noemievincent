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
                    <a href="/{{app()->getLocale()}}/jobs/offers/create"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.create')}}</a>
                </div>
                <x-filters.container :url="$url">
                    <x-filters.jobs-agencies :companies="$companies"/>
                    <x-filters.jobs-locations :locations="$locations"/>
                </x-filters.container>
                <div id="container">
                    <x-partners.paginated_partners :partners="$partners"/>
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

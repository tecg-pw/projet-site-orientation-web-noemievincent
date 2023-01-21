<x-header :head_title="'jobs.head_title'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="jobs" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="jobs"
                    class="h2">{{__('jobs.head_title')}}</h2>
                <p class="text-lg ">{{__('jobs.tagline')}}</p>
            </div>
            <div class="flex flex-col gap-4">
                <div class=" col-span-2 flex flex-col gap-2 md:flex-row md:gap-12">
                    <a href="/{{app()->getLocale()}}/jobs/offers"
                       class="uppercase text-lg text-orange font-bold">{{__('jobs.tabs.offers')}}</a>
                    <a href="/{{app()->getLocale()}}/jobs/partners"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.partners')}}</a>
                    <a href="/{{app()->getLocale()}}/jobs/offers/create"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.create')}}</a>
                </div>
                <x-filters.container :url="$url">
                    <x-filters.jobs-agencies :companies="$companies"/>
                    <x-filters.jobs-locations :locations="$locations"/>
                    <x-filters.date :label="'date'" :dates="$dates" :property="'published_at'" :format="'F Y'"/>
                </x-filters.container>
                <div id="container">
                    <x-jobs.paginated_jobs :offers="$offers"/>
                </div>
            </div>

        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

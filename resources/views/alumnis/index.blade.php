<x-header :head_title="'alumnis.head_title'" :id="'alumnis_page'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="alumnis" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="alumnis"
                    class="h2">{{__('alumnis.title')}}</h2>
                <p class="text-lg ">{{__('alumnis.tagline')}}</p>
            </div>
            <x-filters.container :url="$url">
                <x-filters.date :label="'start_date'" :dates="$start_dates" :property="'start_year'" :format="'Y'"/>
                <x-filters.date :label="'end_date'" :dates="$end_dates" :property="'end_year'" :format="'Y'"/>
            </x-filters.container>
            <div id="container">
                <x-alumnis.paginated_alumnis :alumnis="$alumnis"/>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

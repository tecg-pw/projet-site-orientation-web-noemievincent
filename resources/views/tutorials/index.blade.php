<x-header :head_title="'resources.tutorials.head_title'" :id="'tutorials_page'"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="tutorials" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="tutorials"
                    class="h2">{{__('resources.tutorials.title')}}</h2>
                <p class="text-lg ">{{__('resources.tutorials.tagline')}}</p>
            </div>
            <x-filters.container :url="$url">
                <x-filters.languages :languages="$languages"/>
            </x-filters.container>
            <div id="container">
                <x-tutorials.paginated_tutorials :tutorials="$tutorials"/>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

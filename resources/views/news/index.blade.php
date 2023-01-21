<x-header :head_title="'news.head_title'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="news" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="news"
                    class="h2">{{__('news.title')}}</h2>
                <p class="text-lg ">{{__('news.tagline')}}</p>
            </div>
            <x-filters.container :url="$url">
                <x-filters.news-categories :categories="$categories"/>
                <x-filters.date :dates="$dates" :property="'published_at'" :format="'Y'"/>
            </x-filters.container>
            <div id="container">
                <x-news.paginated_news :news="$news"/>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

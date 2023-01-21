<x-header :head_title="'news.head_title'" :id="'news_page'"/>
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
                <div class="flex gap-1">
                    <fieldset class="rounded-lg px-3 py-1 bg-white border border-blue/40">
                        <label for="date" class="sr-only">{{__('filters.titles.date')}} :</label>
                        <select name="date" id="date" class="bg-transparent">
                            <option value="all">{{__('filters.titles.date')}}</option>
                            @foreach($dates as $date)
                                <option
                                    value="{{$date}}" @selected(request()->input('date') == $date)>{{ucfirst($date)}}</option>
                            @endforeach
                        </select>
                    </fieldset>
                </div>
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

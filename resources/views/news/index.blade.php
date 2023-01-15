<x-header :head_title="'news.head_title'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="news" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="news"
                    class="h2">{{__('news.title')}}</h2>
                <p class="text-lg ">{{__('news.tagline')}}</p>
            </div>
            <div class="flex flex-col gap-4">
                <div class="lg:grid lg:grid-cols-3 lg:gap-4">
                    <div class="flex gap-6 items-center col-span-2">
                        <p class="uppercase text-lg">{{__('filters.title')}}</p>
                        <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                    </div>
                    <x-filters.search :element="'news'"/>
                </div>
                <form class="flex flex-col gap-2 sm:flex-row sm:col-span-2 sm:items-center sm:justify-between">
                    @csrf
                    <div class="flex gap-3">
                        <x-filters.news-categories :categories="$categories"/>
                        {{--                        <x-filters.date :dates="$dates" :property="'end_year'" :format="'Y'"/>--}}
                    </div>
                    <button type="submit"
                            class="self-start font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                        {{__('filters.filter_button')}}
                    </button>
                </form>
            </div>
            <div class="flex flex-col gap-8">
                <div
                    class="flex flex-col gap-8 justify-items-center sm:grid sm:grid-cols-2 md:grid-cols-3">
                    @foreach($news as $new)
                        <x-news.article :new="$new->translations->where('locale', app()->getLocale())->first()"
                                        :category="$new->category->translations->where('locale', app()->getLocale())->first()" :parent="'index'">
                            <h3 id="{{$new->translations->where('locale', app()->getLocale())->first()->slug}}"
                                class="text-white text-xl">{{$new->translations->where('locale', app()->getLocale())->first()->title}}</h3>
                        </x-news.article>
                    @endforeach
                </div>
                <div>
                    {{$news->links()}}
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

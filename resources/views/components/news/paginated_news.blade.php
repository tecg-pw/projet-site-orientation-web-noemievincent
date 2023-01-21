@props([
    'news'
])
<div class="flex flex-col gap-8" id="paginated_news">
    @if(count($news) > 0)
        <x-news.loop :news="$news"/>
        <x-news.pagination :news="$news"/>
    @else
        <p class="text-center text-xl mt-12">{{__('search.no_results')}}</p>
    @endif

</div>

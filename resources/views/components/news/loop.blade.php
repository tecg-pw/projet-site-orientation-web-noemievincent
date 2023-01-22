@props([
    /** @var \mixed */
    'news'
])
<div class="flex flex-col gap-8 justify-items-center sm:grid sm:grid-cols-2 lg:grid-cols-3 lg:gap-2" id="loop">
    @foreach($news as $new)
        <x-news.article :new="$new->translations->where('locale', app()->getLocale())->first()"
                        :category="$new->category->translations->where('locale', app()->getLocale())->first()"
                        :parent="'index'">
            <h3 id="{{$new->translations->where('locale', app()->getLocale())->first()->slug}}"
                class="title first-letter:capitalize text-white text-xl">{{$new->translations->where('locale', app()->getLocale())->first()->title}}</h3>
        </x-news.article>
    @endforeach
</div>

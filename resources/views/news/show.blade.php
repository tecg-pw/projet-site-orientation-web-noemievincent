<x-header :head_title="$article->title"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$article->slug}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/news"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('news.single.back_to_news_link')}}</span>
                </a>
                <h2 id="{{$article->slug}}"
                    class="single-h2">{{$article->title}}</h2>
            </div>
            <div class="flex justify-between gap-28">
                <div class="h-full w-full flex flex-col gap-6">
                    <div class="flex justify-between items-center">
                        {!! __('news.single.infos', ['datetime' => $article->published_at->format('d-m-Y'), 'date' => $article->published_at->translatedFormat('d F Y'), 'author' => $author->name, 'category' => $category->translations->where('locale', app()->getLocale())->first()->name]) !!}
                        <x-share/>
                    </div>
                    <div class="flex gap-2">
                        <p>{{__('news.single.alternative')}}</p>
                        <ul class="flex gap-2">
                            @foreach($alternatives as $key => $alt)
                                <li>
                                    <a class="hover:underline underline-offset-2 decoration-1 decoration-solid text-orange"
                                       href="/{{$alt->locale}}/news/{{$alt->slug}}">{{__('locales.' . $alt->locale)}}</a>{{$key == count($alternatives)-1 ? '' : ', '}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="leading-8 flex flex-col gap-4">
                        <p class="font-bold">
                            {{$article->excerpt}}
                        </p>
                        <p>
                            {{$article->body}}
                        </p>
                    </div>
                </div>
            </div>
            @if(count($articles) > 1)
                <div class="flex flex-col gap-5">
                    <h2 class="font-display font-semibold text-blue text-xl tracking-wider">{{__('news.single.others_news_in', ['category' => $category->translations->where('locale', app()->getLocale())->first()->name])}}</h2>
                    <div class="flex flex-col gap-2">
                        <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                            @foreach($articles as $otherArticle)
                                @if($otherArticle->translations->where('locale', app()->getLocale())->first()->article_id != $article->article_id)
                                    <x-news.article
                                        :new="$otherArticle->translations->where('locale', app()->getLocale())->first()"
                                        :category="$category->translations->where('locale', app()->getLocale())->first()"/>
                                @endif
                            @endforeach
                        </div>
                        <a href="/{{app()->getLocale()}}/news"
                           class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                            <span>{{__('news.single.all_news_link')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                 class="fill-orange h-full">
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endif
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

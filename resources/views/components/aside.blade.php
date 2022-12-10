@php use App\Models\Offer; @endphp
@props(['aside'])
<aside class="flex flex-col hidden lg:block">
    <h2 class="sr-only">{{__('aside.title')}}</h2>
    <section aria-labelledby="aside-news" class="flex flex-col gap-2">
        <h3 id="aside-news"
            class="font-display font-medium text-blue text-2xl tracking-wider uppercase">{{__('aside.news_title')}}</h3>
        <div class="flex flex-col gap-3">
            @foreach($aside['news'] as $new)
                @php
                    $categoryRef = $new->category;
                    $category = App\Models\ArticleCategory::find($categoryRef->category_id);
                @endphp
                <x-news.aside-article :new="$new"
                                      :category="$category->translations->where('locale', app()->getLocale())->first()"/>
            @endforeach
        </div>
        <a href="/{{app()->getLocale()}}/news"
           class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
            <span>{{__('aside.all_news_link')}}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                 class="fill-orange h-full">
                <path
                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
            </svg>
        </a>
    </section>
    <section aria-labelledby="aside-jobs" class="flex flex-col gap-2 mt-8">
        <h3 id="aside-jobs"
            class="font-display font-medium text-blue text-2xl tracking-wider uppercase">{{__('aside.offers_title')}}</h3>
        <div class="flex flex-col gap-3">
            @foreach($aside['offers'] as $offer)
                @php
                    $company = Offer::find($offer->offer_id)->company;
//                    dd($company);
                @endphp
                <x-jobs.aside-article :offer="$offer"
                                      :company="$company->translations->where('locale', app()->getLocale())->first()"/>
            @endforeach
        </div>
        <a href="/{{app()->getLocale()}}/jobs"
           class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
            <span>{{__('aside.all_offers_link')}}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                 class="fill-orange h-full">
                <path
                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
            </svg>
        </a>
    </section>
</aside>

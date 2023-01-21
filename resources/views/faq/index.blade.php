<x-header :head_title="'faq.head_title'" :id="'faq'"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="faq" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="faq"
                    class="h2">{{__('faq.title')}}</h2>
                {!! __('faq.tagline') !!}
            </div>
            <div class="flex flex-col gap-3 lg:grid lg:grid-cols-3 lg:gap-x-11">
                <ul class="flex gap-12 col-span-2">
                    @foreach($categories as $category)
                        @php
                            $category = $category->translations->where('locale', app()->getLocale())->first();
                        @endphp
                        <li>
                            <a href="/{{app()->getLocale()}}/faq/{{$category->slug}}" data-segment="{{$category->slug}}"
                               class="uppercase text-lg text-orange {{request()->segment(3) === $category->slug ? 'font-bold' : 'underline'}}">{{__($category->name)}}</a>
                        </li>
                    @endforeach
                </ul>
                <x-filters.search :action="$url"/>
            </div>
            <div class="flex flex-col gap-20">
                <div id="container">
                    <x-faq.questions :questions="$questions"/>
                </div>
                {!! __('faq.tagline') !!}
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

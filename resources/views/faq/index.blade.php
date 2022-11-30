<x-header :head_title="'faq.head_title'"/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="faq" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="faq"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('faq.title')}}</h2>
                {!! __('faq.tagline') !!}
            </div>
            <div class="flex flex-col gap-3">
                <div class="grid grid-cols-3 gap-x-11">
                    <ul class="flex gap-12 col-span-2">
                        @foreach(__('faq.tabs') as $slug => $label)
                            <li>
                                <a href="?{{$slug}}"
                                   class="uppercase text-lg text-orange {{Request::has($slug) || (Request::all() == null && $slug === 'general') ? 'font-bold' : 'underline'}}">{{__($label)}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <x-filters.search/>
                </div>
            </div>
            <div class="flex flex-col gap-20">
                <div class="flex flex-col gap-6">
                    @foreach($questions as $question)
                        <x-faq.faq :question="$question"/>
                    @endforeach
                </div>
                {!! __('faq.tagline') !!}
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

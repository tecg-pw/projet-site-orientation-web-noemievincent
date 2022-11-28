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
                    @for($i = 0; $i < 5; $i++)
                        <article aria-labelledby="question" class="flex flex-col gap-5">
                            <div class="flex flex-col gap-3">
                                <div class="flex justify-between">
                                    <h3 id="question" class="text-xl">{{__('Intitulé de la question')}}</h3>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="18"
                                             width="9"
                                             class="-rotate-90 fill-orange h-full">
                                            <path
                                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>
                                <p class="font-light cut-text text-sm">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                    eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                    takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                    consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                    dolore magna aliquyam erat, sed diam voluptua.
                                </p>
                            </div>
                            <div class="bg-blue/50 h-px w-full"></div>
                        </article>
                    @endfor
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

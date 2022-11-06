<aside class="flex flex-col gap-14">
    <h2 class="sr-only">{{__('Nos nouveautés')}}</h2>
    <section aria-labelledby="aside-news" class="flex flex-col gap-2">
        <h3 id="aside-news"
            class="font-display font-medium text-blue text-2xl tracking-wider uppercase">{{__('À la une')}}</h3>
        <div class="flex flex-col gap-3">
            @for($i = 0; $i < 3; $i++)
                <x-news.aside-article/>
            @endfor
        </div>
        <a href="/news" class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
            <span>{{__('Toutes les actualités')}}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6" class="fill-orange h-full">
                <path id="news-link"
                      d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                      transform="translate(0.001 0.001)" fill-rule="evenodd"/>
            </svg>
        </a>
    </section>
    <section aria-labelledby="aside-jobs" class="flex flex-col gap-2">
        <h3 id="aside-jobs"
            class="font-display font-medium text-blue text-2xl tracking-wider uppercase">{{__('Offres de stages')}}</h3>
        <div class="flex flex-col gap-3">
            @for($i = 0; $i < 2; $i++)
                <x-jobs.aside-article/>
            @endfor
        </div>
        <a href="/jobs" class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
            <span>{{__('Toutes les offres')}}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6" class="fill-orange h-full">
                <path id="jobs-link"
                      d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                      transform="translate(0.001 0.001)" fill-rule="evenodd"/>
            </svg>
        </a>
    </section>
</aside>

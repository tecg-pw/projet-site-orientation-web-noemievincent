<article aria-labelledby="job"
         class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 w-full">
    <div class="relative">
        <a href="/jobs/offers/slug" class="full-link">{{__('Voir l‘offre :name')}}</a>
        <div>
            <div class="p-3 flex flex-col gap-3">
                <h3 id="job" class="text-2xl uppercase">Intitulé du stage</h3>
                <div class="flex gap-2">
                    <img src="https://placehold.jp/50x50.png" alt="" height="50" width="50" class="rounded-full">
                    <div>
                        <p>nom de l'entreprise</p>
                        <p class="font-light">lieu du stage</p>
                    </div>
                </div>
                <div class="flex gap-2 font-light text-sm">
                    <time datetime="">dd/mm/yyyy</time>
                    —
                    <p>xx {{__('semaines')}}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-sm">{{__('publié le')}}
                        <time datetime="">dd/mm/yyyy</time>
                    </p>
                    <a href="/jobs/offers/slug" class="flex items-center gap-3 uppercase text-orange text-sm">
                        <span>{{__('Voir l‘offre')}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                             aria-labelledby="jobTitle" class="fill-orange h-full">
                            <title id="jobTitle">{{__('Voir l‘offre :name')}}</title>
                            <path
                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>

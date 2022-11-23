<article aria-labelledby="partner" itemscope itemtype="https://schema.org/Corporation"
         class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 w-full">
    <div class="relative">
        <a href="/jobs/partners/slug" class="full-link">{{__('Voir l‘entreprise :name')}}</a>
        <div>
            <div class="p-3 flex flex-col gap-2">
                <div class="flex gap-3">
                    <img src="https://placehold.jp/60x60.png" alt="" class="rounded-full" itemprop="logo">
                    <h3 id="partner" class="text-2xl uppercase" itemprop="name">Nom de l'entreprise</h3>
                </div>
                <div class="font-light">
                    <div class="flex flex-col text-sm" itemscope itemtype="https://schema.org/PostalAddress"
                         itemprop="location">
                        <p><span itemprop="streetAddress">Rue</span></p>
                        <p><span itemprop="postalCode">Code</span> <span itemprop="addressLocality">Localité</span></p>
                    </div>
                </div>
                <a href="/jobs/partners/slug"
                   class="font-light self-end flex items-center gap-4 uppercase text-orange text-sm">
                    <span>{{__('Voir l‘entreprise')}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         aria-labelledby="partnerTitle" class="fill-orange h-full">
                        <title id="partnerTitle">{{__('Voir l‘entreprise :name')}}</title>
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</article>

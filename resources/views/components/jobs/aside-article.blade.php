<article aria-labelledby="job"
         class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 w-full">
    <div class="relative">
        <a href="/jobs/offers/slug" class="full-link">{{__('Voir l‘offre :name')}}</a>
        <div>
            <div class="p-3 flex flex-col gap-3">
                <h4 id="job" class="text-xl uppercase">Intitulé du stage</h4>
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
                <p class="text-sm">{{__('publié le')}}
                    <time datetime="">dd/mm/yyyy</time>
                </p>
            </div>
        </div>
    </div>
</article>

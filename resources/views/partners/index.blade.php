<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="partners" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="partners"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Entreprises partenaires')}}</h2>
                <p class="text-lg ">{{__('Les entreprises s’adressent souvent à nous afin de proposer des stages à nos étudiants en dernière année. Au fil du temps, un réseau s’est créé au sein de notre section.')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-12 col-span-2">
                    <a href="/jobs/offers" class="uppercase text-lg text-orange underline">{{__('Offres de stages')}}</a>
                    <a href="/jobs/partners" class="uppercase text-lg text-orange underline font-bold">{{__('Entreprises partenaires')}}</a>
                    <a href="/jobs/create" class="uppercase text-lg text-orange underline">{{__('Proposer un stage')}}</a>
                </div>
                <div class="flex gap-6 items-center">
                    <p class="uppercase text-lg">{{__('Filtrer par')}}</p>
                    <a href="#" class="text-orange text-xs">{{__('supprimer les filtres')}}</a>
                </div>
                <div class="grid grid-cols-3 gap-x-11">
                    <div class="flex gap-4 col-span-2">
                        <x-filters.jobs-agencies/>
                        <x-filters.jobs-locations/>
                        {{--                        <x-filters.date/>--}}
                    </div>
                    <x-filters.search/>
                </div>
            </div>
            <div class="flex flex-col gap-20">
                <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                    @for($i = 0; $i < 9; $i++)
                        <x-partners.article/>
                    @endfor
                </div>
                <div class="bg-pink-200">
                    PAGINATION
                </div>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

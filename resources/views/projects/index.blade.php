<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="projects" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="projects"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Les projets')}}</h2>
                <p class="text-lg ">{{__('TFE, portfolios, applications, jeu,… Découvrez les nombreux projets réalisés par nos étudiants au fil des années.')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-6 items-center">
                    <p class="uppercase text-lg">{{__('Filtrer par')}}</p>
                    <a href="#" class="text-orange text-xs">{{__('supprimer les filtres')}}</a>
                </div>
                <div class="grid grid-cols-3 gap-x-11">
                    <div class="flex gap-4 col-span-2">
                        <x-filters.project-categories/>
                        <x-filters.date/>
                    </div>
                    <x-filters.search/>
                </div>
            </div>
            <div class="flex flex-col gap-20">
                <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                    @for($i = 0; $i < 9; $i++)
                        <x-projects.article/>
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

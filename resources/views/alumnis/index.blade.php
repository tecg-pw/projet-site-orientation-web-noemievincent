<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="alumnis" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="alumnis"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Nos anciens élèves')}}</h2>
                <p class="text-lg ">{{__('Velit aliquip nulla non commodo nisi pariatur magna ut magna laboris. Culpa eu culpa ipsum dolore laboris voluptate laboris sint.')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-6 items-center">
                    <p class="uppercase text-lg">{{__('Filtrer par')}}</p>
                    <a href="#" class="text-orange text-xs">{{__('supprimer les filtres')}}</a>
                </div>
                <div class="grid grid-cols-3 gap-x-11">
                    <div class="flex gap-4 col-span-2">
                        <x-filters.date/>
                    </div>
                    <x-filters.search/>
                </div>
            </div>
            <div class="flex flex-col gap-20">
                <div class="grid grid-cols-3 gap-8">
                    @for($i = 0; $i < 9; $i++)
                        <x-alumnis.card/>
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

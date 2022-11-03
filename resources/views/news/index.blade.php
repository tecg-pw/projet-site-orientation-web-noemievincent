<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="news" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="news" class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Nos actualités')}}</h2>
                <p class="text-lg ">{{__('Retrouvez les actualités de la section et les évènements auxquels nos étudiants participent depuis plusieurs années.')}}</p>
            </div>
            <div class="bg-pink-200">
                FILTRES
            </div>
            <div class="flex flex-col gap-20">
                <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                    @for($i = 0; $i < 9; $i++)
                        <x-news.article/>
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

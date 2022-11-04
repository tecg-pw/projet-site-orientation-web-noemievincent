<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="news" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="news" class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Nos actualités')}}</h2>
                <p class="text-lg ">{{__('Retrouvez les actualités de la section et les évènements auxquels nos étudiants participent depuis plusieurs années.')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-6 items-center">
                    <p class="uppercase text-lg">{{__('Filtrer par')}}</p>
                    <a href="#" class="text-orange text-xs">{{__('supprimer les filtres')}}</a>
                </div>
                <div class="grid grid-cols-3 gap-x-11">
                    <div class="flex gap-4 col-span-2">
                        <x-filters.news-categories/>
{{--                        <x-filters.date/>--}}
                    </div>
                    <div class="flex col-start-3">
                        <label for="search-keyword" class="h-full flex-1">
                            <span class="sr-only">
                                {{__('Recherchez un mot clé')}}
                            </span>
                            <input placeholder="Recherchez un mot clé" type="search" id="search-keyword"
                                   class="h-full w-full pl-3 py-1 border border-orange-light border-r-0 focus:outline-none rounded-l-lg placeholder:font-light transition ease-in-out duration-200">
                        </label>
                        <button
                            class="bg-orange text-white h-full px-3 rounded-r-lg uppercase hover:bg-orange-dark transition ease-in-out duration-200">
                            <svg version="1.1" id="search" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="18"
                                 viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve"
                                 class="fill-white">
                            <path d="M20.6,19.1c4.1-4.9,3.5-12.3-1.5-16.4S6.8-0.8,2.7,4.2s-3.5,12.3,1.5,16.4c2.1,1.8,4.7,2.7,7.5,2.7
                        c2.7,0,5.4-1,7.5-2.7l9.1,9.1c0.4,0.4,1.1,0.4,1.5,0c0.4-0.4,0.4-1.1,0-1.5L20.6,19.1z M11.6,21.2c-5.3,0-9.5-4.3-9.5-9.5
                        s4.3-9.5,9.5-9.5s9.5,4.3,9.5,9.5C21.2,16.9,16.9,21.2,11.6,21.2C11.6,21.2,11.6,21.2,11.6,21.2z"/>
                </svg>
                            <span class="sr-only">
                            {{__('Recherche')}}
                        </span></button>
                    </div>
                </div>
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

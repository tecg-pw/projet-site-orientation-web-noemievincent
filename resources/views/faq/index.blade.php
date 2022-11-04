<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="faq" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="faq"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Foire aux questions')}}</h2>
                <p class="text-lg ">{{__('Tout ce que vous devez savoir sur la section et la formation. Vous ne trouvez pas la réponse que vous cherchez ? N’hésitez pas à poser votre question sur le ')}}
                    <a href="/forum"
                       class="underline underline-offset-2 decoration-1 decoration-solid text-orange">forum</a>
                </p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="grid grid-cols-3 gap-x-11">
                    <div class="flex gap-12 col-span-2">
                        <a href="?general" class="uppercase text-lg text-orange underline {{$_SERVER['QUERY_STRING'] === 'general' || $_SERVER['QUERY_STRING'] === '' ? 'font-bold' : ''}}">{{__('Général')}}</a>
                        <a href="?inscription" class="uppercase text-lg text-orange underline {{$_SERVER['QUERY_STRING'] === 'inscription' ? 'font-bold' : ''}}">{{__('Inscription')}}</a>
                        <a href="?hepl" class="uppercase text-lg text-orange underline {{$_SERVER['QUERY_STRING'] === 'hepl' ? 'font-bold' : ''}}">{{__('La HEPL')}}</a>
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
                <div class="flex flex-col gap-6">
                    @for($i = 0; $i < 5; $i++)
                        <article aria-labelledby="question" class="flex flex-col gap-5">
                            <div class="flex flex-col gap-3">
                                <div class="flex justify-between">
                                    <h3 id="question" class="text-xl">{{__('Intitulé de la question')}}</h3>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="18" width="9"
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
                <p class="text-lg ">{{__('Tout ce que vous devez savoir sur la section et la formation. Vous ne trouvez pas la réponse que vous cherchez ? N’hésitez pas à poser votre question sur le ')}}
                    <a href="/forum"
                       class="underline underline-offset-2 decoration-1 decoration-solid text-orange">forum</a>
                </p>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

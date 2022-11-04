<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="search-results" class="col-span-3 flex flex-col gap-8">
{{--            @if('resultats')--}}
                <div>
{{--                    <div class="flex flex-col gap-2">--}}
{{--                        <h2 id="search-results"--}}
{{--                            class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Résultats pour')}}</h2>--}}
{{--                        <p class="text-2xl font-semibold text-blue">&laquo; {{__('termes recherchés')}} &raquo;</p>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col gap-3">--}}
{{--                        <div class="flex gap-6 items-center">--}}
{{--                            <p class="uppercase text-lg">{{__('Afficher les résultats par')}}</p>--}}
{{--                            <a href="#" class="text-orange text-xs">{{__('supprimer les filtres')}}</a>--}}
{{--                        </div>--}}
{{--                        <div class="flex gap-4 col-span-2">--}}
{{--                            <a href="?projects"--}}
{{--                               class="rounded-lg py-1 px-4 bg-white border border-blue/40 {{$_SERVER['QUERY_STRING'] === 'projects' ? 'bg-blue/20' : ''}}">{{__('Projets')}}--}}
{{--                                (x)</a>--}}
{{--                            <a href="?forum"--}}
{{--                               class="rounded-lg py-1 px-4 bg-white border border-blue/40 {{$_SERVER['QUERY_STRING'] === 'forum' ? 'bg-blue/20' : ''}}">{{__('Questions du forum')}}--}}
{{--                                (x)</a>--}}
{{--                            <a href="?tutorials"--}}
{{--                               class="rounded-lg py-1 px-4 bg-white border border-blue/40 {{$_SERVER['QUERY_STRING'] === 'tutorials' ? 'bg-blue/20' : ''}}">{{__('Tutoriels')}}--}}
{{--                                (x)</a>--}}
{{--                            <a href="?news"--}}
{{--                               class="rounded-lg py-1 px-4 bg-white border border-blue/40 {{$_SERVER['QUERY_STRING'] === 'news' ? 'bg-blue/20' : ''}}">{{__('Actualités')}}--}}
{{--                                (x)</a>--}}
{{--                            <a href="?users"--}}
{{--                               class="rounded-lg py-1 px-4 bg-white border border-blue/40 {{$_SERVER['QUERY_STRING'] === 'users' ? 'bg-blue/20' : ''}}">{{__('Utilisateurs')}}--}}
{{--                                (x)</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col gap-4">--}}
{{--                        <h3 class="font-semibold font-display text-2xl">{{__('Projets')}}</h3>--}}
{{--                        <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">--}}
{{--                            @for($i = 0; $i < 3; $i++)--}}
{{--                                <x-projects.article/>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                        <a href="#" class="flex items-center gap-4 uppercase text-orange text-sm">--}}
{{--                            <span>{{__('Plus de résultats')}}</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"--}}
{{--                                 class="rotate-90 fill-orange h-full">--}}
{{--                                <path--}}
{{--                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"--}}
{{--                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col gap-4">--}}
{{--                        <h3 class="font-semibold font-display text-2xl">{{__('Questions du forum')}}</h3>--}}
{{--                        <div class="flex flex-col gap-4">--}}
{{--                            @for($i = 0; $i < 2; $i++)--}}
{{--                                <x-forum.article/>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                        <a href="#" class="flex items-center gap-4 uppercase text-orange text-sm">--}}
{{--                            <span>{{__('Plus de résultats')}}</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"--}}
{{--                                 class="rotate-90 fill-orange h-full">--}}
{{--                                <path--}}
{{--                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"--}}
{{--                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col gap-6">--}}
{{--                        <h3 class="font-semibold font-display text-2xl">{{__('Tutoriels')}}</h3>--}}
{{--                        <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">--}}
{{--                            @for($i = 0; $i < 3; $i++)--}}
{{--                                <div class="border border-blue w-full">--}}
{{--                                    tutoriels--}}
{{--                                </div>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                        <a href="#" class="flex items-center gap-4 uppercase text-orange text-sm">--}}
{{--                            <span>{{__('Plus de résultats')}}</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"--}}
{{--                                 class="rotate-90 fill-orange h-full">--}}
{{--                                <path--}}
{{--                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"--}}
{{--                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col gap-6">--}}
{{--                        <h3 class="font-semibold font-display text-2xl">{{__('Actualités')}}</h3>--}}
{{--                        <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">--}}
{{--                            @for($i = 0; $i < 3; $i++)--}}
{{--                                <x-news.article/>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                        <a href="#" class="flex items-center gap-4 uppercase text-orange text-sm">--}}
{{--                            <span>{{__('Plus de résultats')}}</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"--}}
{{--                                 class="rotate-90 fill-orange h-full">--}}
{{--                                <path--}}
{{--                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"--}}
{{--                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col gap-6">--}}
{{--                        <h3 class="font-semibold font-display text-2xl">{{__('Utilisateurs')}}</h3>--}}
{{--                        <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">--}}
{{--                            @for($i = 0; $i < 3; $i++)--}}
{{--                                <div class="border border-blue w-full">--}}
{{--                                    utilisateurs--}}
{{--                                </div>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                        <a href="#" class="flex items-center gap-4 uppercase text-orange text-sm">--}}
{{--                            <span>{{__('Plus de résultats')}}</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"--}}
{{--                                 class="rotate-90 fill-orange h-full">--}}
{{--                                <path--}}
{{--                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"--}}
{{--                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
{{--            @else--}}
                <div>
                    <div class="flex flex-col gap-2">
                        <h2 id="search-results"
                            class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Aucun résultats pour')}}</h2>
                        <p class="text-2xl font-semibold text-blue">&laquo; {{__('termes recherchés')}} &raquo;</p>
                    </div>
                    <div class="mt-12">
                        <p class="text-2xl mb-3">{{__('Votre recherche n‘a aucun résultat')}}</p>
                        <ul class="list-inside leading-7 ml-6 text-lg">
                            <li>{{__('Vérifiez que l’orthographe est correcte.')}}</li>
                            <li>{{__('Supprimez les guillemets autour des expressions pour rechercher chaque mot séparément. ')}}</li>
                            <li>{{__('Envisagez d’élargir votre recherche avec OR.')}}</li>
                        </ul>
                    </div>
                </div>
{{--            @endif--}}
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

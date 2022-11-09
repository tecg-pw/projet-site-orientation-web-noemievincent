@php
    $filters_items = [
        'projects' => 'projets',
        'forum' => 'questions du forum',
        'tutorials' => 'tutoriels',
        'news' => 'actualités',
        'users' => 'utilisateurs',
    ];
@endphp
<x-header/>
<main class="mt-6 flex-1 px-10">
    <div class="grid grid-cols-4 justify-between gap-12">
        <div class="col-span-3">
            <div class="mb-12">
                <form action="/search-results" method="post" class="flex col-start-3 h-14">
                    @csrf
                    <label for="search-keyword" class="h-full flex-1">
                            <span class="sr-only">
                                {{__('Recherchez un mot clé')}}
                            </span>
                        <input placeholder="Recherchez un mot clé" type="search" id="search-keyword"
                               class="h-full w-full pl-3 py-1 border border-orange-light border-r-0 focus:outline-none rounded-l-lg placeholder:font-light transition ease-in-out duration-200">
                    </label>
                    <button
                        class="bg-orange text-white h-full px-10 rounded-r-lg uppercase hover:bg-orange-dark transition ease-in-out duration-200">
                        {{__('Rechercher')}}
                    </button>
                </form>
            </div>
            <section aria-labelledby="search-results" class="flex flex-col gap-8">
                {{--            @if('resultats')--}}
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-2">
                        <h2 id="search-results"
                            class="text-5xl font-bold uppercase tracking-wider font-display text-blue">{{__('Résultats pour')}}</h2>
                        <p class="text-2xl font-semibold text-blue">&laquo; {{__('termes recherchés')}} &raquo;</p>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-6">
                            <p class="text-lg uppercase">{{__('Afficher les résultats par')}}</p>
                            <a href="?" class="text-xs text-orange">{{__('supprimer les filtres')}}</a>
                        </div>
                        <ul class="col-span-2 flex gap-4">
                            @foreach($filters_items as $slug => $name)
                                <li><a href="?{{$slug}}"
                                       class="{{Request::has($slug) ? 'bg-blue/20' : ''}} rounded-lg py-1 px-4 bg-white border border-blue/40">{{ucfirst($name)}}
                                        (x)</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="text-2xl font-semibold font-display">{{__('Projets')}}</h3>
                        <div class="grid grid-cols-3 justify-items-center gap-x-11 gap-y-8">
                            @for($i = 0; $i < 3; $i++)
                                <x-projects.article/>
                            @endfor
                        </div>
                        <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                            <span>{{__('Plus de résultats')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                 class="h-full rotate-90 fill-orange">
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="text-2xl font-semibold font-display">{{__('Questions du forum')}}</h3>
                        <div class="flex flex-col gap-4">
                            @for($i = 0; $i < 2; $i++)
                                <x-forum.article/>
                            @endfor
                        </div>
                        <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                            <span>{{__('Plus de résultats')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                 class="h-full rotate-90 fill-orange">
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-col gap-6">
                        <h3 class="text-2xl font-semibold font-display">{{__('Tutoriels')}}</h3>
                        <div class="grid grid-cols-3 justify-items-center gap-x-11 gap-y-8">
                            @for($i = 0; $i < 3; $i++)
                                <div class="w-full border border-blue">
                                    tutoriels
                                </div>
                            @endfor
                        </div>
                        <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                            <span>{{__('Plus de résultats')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                 class="h-full rotate-90 fill-orange">
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-col gap-6">
                        <h3 class="text-2xl font-semibold font-display">{{__('Actualités')}}</h3>
                        <div class="grid grid-cols-3 justify-items-center gap-x-11 gap-y-8">
                            @for($i = 0; $i < 3; $i++)
                                <x-news.article/>
                            @endfor
                        </div>
                        <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                            <span>{{__('Plus de résultats')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                 class="h-full rotate-90 fill-orange">
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-col gap-6">
                        <h3 class="text-2xl font-semibold font-display">{{__('Utilisateurs')}}</h3>
                        <div class="grid grid-cols-3 justify-items-center gap-x-11 gap-y-8">
                            @for($i = 0; $i < 3; $i++)
                                <div class="w-full border border-blue">
                                    utilisateurs
                                </div>
                            @endfor
                        </div>
                        <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                            <span>{{__('Plus de résultats')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                 class="h-full rotate-90 fill-orange">
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
                {{--            @else--}}
                <div>
                    <div class="flex flex-col gap-2">
                        <h2 id="search-results"
                            class="text-5xl font-bold uppercase tracking-wider font-display text-blue">{{__('Aucun résultats pour')}}</h2>
                        <p class="text-2xl font-semibold text-blue">&laquo; {{__('termes recherchés')}} &raquo;</p>
                    </div>
                    <div class="mt-12">
                        <p class="mb-3 text-2xl">{{__('Votre recherche n‘a aucun résultat')}}</p>
                        <ul class="ml-6 list-inside text-lg leading-7">
                            <li>{{__('Vérifiez que l’orthographe est correcte.')}}</li>
                            <li>{{__('Supprimez les guillemets autour des expressions pour rechercher chaque mot séparément. ')}}</li>
                            <li>{{__('Envisagez d’élargir votre recherche avec OR.')}}</li>
                        </ul>
                    </div>
                </div>
                {{--            @endif--}}
            </section>
        </div>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

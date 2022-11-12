<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="slug" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/about#classes"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full" aria-labelledby="projectsTitle">
                        <title id="projectsTitle">{{__('Retourner sur la page des projets')}}</title>
                        <path id="projects-link"
                              d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                              transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('Retour aux cours')}}</span>
                </a>
                <h2 id="slug"
                    class="font-display font-bold text-blue text-4xl tracking-wider uppercase">{{__("Design Web")}}</h2>
            </div>
            <div class="flex justify-between">
                <ul class="text-lg">
                    <li><span class="font-semibold">{{__('Année du cursus : ')}}</span><span>{{__('Bloc 2')}}</span>
                    </li>
                    <li class="flex gap-2"><span class="font-semibold">{{__('Année du cursus : ')}}</span>
                        <ul class="flex gap-2">
                            <li><a href="/teachers/slug"
                                   class="underline underline-offset-2 hover:text-orange transition-all ease-in-out duration-200">Myriam
                                    Dupont</a></li>
                            <li><a href="/teachers/slug"
                                   class="underline underline-offset-2 hover:text-orange transition-all ease-in-out duration-200">Cédric
                                    Müller</a></li>
                            <li><a href="/teachers/slug"
                                   class="underline underline-offset-2 hover:text-orange transition-all ease-in-out duration-200">Toon
                                    Van Den Bos</a></li>
                        </ul>
                    </li>
                    <li><span class="font-semibold">{{__('Nombre d‘heures : ')}}</span><span>{{__('165h')}}</span>
                    <li><span class="font-semibold">{{__('Période : ')}}</span><span>{{__('annuel')}}</span>
                    <li><span class="font-semibold">{{__('Crédits ETCS : ')}}</span><span>{{__('14')}}</span>
                    </li>
                </ul>
                <a href="#"
                   class="text-orange underline underline-offset-2 hover:text-orange-dark">{{__('Voir la fiche ECTS complète')}}</a>
            </div>
            <div>
                <h3 class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{__('Description')}}</h3>
                <div class="flex flex-col gap-2">
                    <p>{{__('Incididunt cupidatat laborum duis do consectetur. Enim non eu velit cillum Lorem commodo. Labore tempor consectetur proident laborum laboris elit. Do aliqua commodo sint ea do dolor nisi sint ipsum. Aliqua mollit quis ad fugiat reprehenderit tempor do deserunt qui aliqua.')}}</p>
                    <a href="#"
                       class="underline underline-offset-2 hover:text-orange">{{__('Découvrez le repo GitHub du cours et les différents exercices qui y sont réalisés.')}}</a>
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <h2 class="font-display font-semibold text-blue text-xl tracking-wider">{{__('Quelques projets réalisés dans ce cours')}}</h2>
                <div class="flex flex-col gap-2">
                    <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                        @for($i = 0; $i < 3; $i++)
                            <x-projects.article/>
                        @endfor
                    </div>
                    <a href="/projects"
                       class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                        <span>{{__('Tous les projets')}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                             class="fill-orange h-full">
                            <path
                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>
<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
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
                    @foreach($projects as $project)
                        <article aria-labelledby="{{$project->slug}}" class="relative">
                            <div class="flex gap-2 absolute -top-2 left-5 z-10">
                                @for($i = 1; $i <= 2; $i++)
                                    <a href="#" class="rounded bg-blue text-white text-sm px-3 py-1 hover:bg-orange-dark transition-all ease-in-out duration-200">catégorie {{$i}}</a>
                                @endfor
                            </div>
                            <div class="group bg-blue-card rounded-2xl relative">
                                <a href="/projects/name/{{$project->slug}}" class="full-link">{{__('Voir le projet :name')}}</a>
                                <div>
                                    <div class="relative before:overlay before:bg-blue/5 before:rounded-t-2xl before:transition before:ease-in-out before:duration-200 group-hover:before:bg-blue/30">
                                        <img src="{{$project->file_path}}" alt="{{__('Voir le projet :name')}}"
                                             class="object-cover w-full rounded-t-2xl">
                                    </div>
                                    <div class="p-4 flex flex-col gap-12">
                                        <h3 id="nom-du-projet" class="uppercase text-2xl">{{$project->name}}</h3>
                                        <div>
                                            <p class="text-xl mb-1">{{$project->author_name}}</p>
                                            <div class="flex justify-between">
                                                <time datetime="" class="font-light">Date du projet</time>
                                                <a href="/projects/slug">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24"
                                                         height="24" width="12" aria-labelledby="projectTitle">
                                                        <title id="projectTitle">{{__('Voir le projet :name')}}</title>
                                                        <path d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                                              transform="translate(0.001 0.001)" fill="#89500b"
                                                              fill-rule="evenodd"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
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

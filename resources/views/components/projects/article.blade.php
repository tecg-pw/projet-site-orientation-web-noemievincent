<article aria-labelledby="nom-du-projet" class="group relative">
    <div class="flex gap-1 absolute -top-2 left-5 z-10">
        @for($i = 1; $i <= 2; $i++)
            <a href="#" class="bg-blue text-white text-sm px-3 py-1">catégorie {{$i}}</a>
        @endfor
    </div>
    <div class="bg-card rounded-2xl relative">
        <a href="/projects/slug" class="full-link">{{__('Voir le projet :name')}}</a>
        <div>
            <div class="relative before:overlay before:bg-blue/5 before:rounded-t-2xl group-hover:before:bg-blue/30">
                <img src="/img/project.png" alt="{{__('Voir le projet :name')}}"
                     class="object-cover w-full rounded-t-2xl">
            </div>
            <div class="p-4 flex flex-col gap-12">
                <h3 id="nom-du-projet" class="uppercase text-2xl">Nom du projet</h3>
                <div>
                    <p class="text-xl mb-1">Nom Prénom</p>
                    <div class="flex justify-between">
                        <time datetime="" class="font-light">Date du projet</time>
                        <a href="/projects/slug">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24"
                                 height="24" width="12" aria-labelledby="projectTitle">
                                <title id="projectTitle">{{__('Voir le projet :name')}}</title>
                                <path id="link"
                                      d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
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

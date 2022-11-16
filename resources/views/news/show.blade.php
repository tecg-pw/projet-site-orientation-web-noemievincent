<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="slug" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/projects"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full" aria-labelledby="newsTitle">
                        <title id="newsTitle">{{__('Retourner sur la page des actualités')}}</title>
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('Retour aux actualités')}}</span>
                </a>
                <h2 id="slug"
                    class="font-display font-bold text-blue text-4xl tracking-wider uppercase">{{__('Comment accompagner son ado et l’aider à choisir sa voie ?')}}</h2>
            </div>
            <div class="flex justify-between gap-28">
                <div class="h-full w-full flex flex-col gap-6">
                    <div class="flex justify-between items-center">
                        <p>publiée le
                            <time datetime="">dd/mm/yyyy</time>
                            par William Bednar dans <a href="#"
                                                       class="underline underline-offset-2 decoration-1 decoration-solid hover:text-orange">conseil</a>
                        </p>
                        <x-share/>
                    </div>
                    <div class="leading-8 flex flex-col gap-4">
                        <p class="font-bold">
                            Le 31 mai et le 28 juin 2022, la HEPL organisait deux soirées dédiées aux parents qui
                            souhaitent aider concrètement leur adolescent dans son choix d’études pour l’enseignement
                            supérieur.
                        </p>
                        <p>
                            D’emblée, un constat se doit d’être fait : tous les élèves ne bénéficient pas de la même
                            préparation à la transition secondaire-supérieur au sein de leurs écoles. Or les jeunes ont
                            besoin d’un certain nombre et types d’informations pour opérer un choix d’études et
                            dessiner ainsi leur avenir professionnel.
                            Trouver sa voie est un processus réflexif ; il implique de connaître les formations
                            accessibles, les professions liées mais aussi de se connaître soi-même. Le rôle des parents
                            est primordial dans cette recherche. Au-delà de la collecte d’informations, les
                            encouragements, les moments de partage et de discussion, en toute bienveillance et dans le
                            non-jugement, sont également une aide précieuse pour soutenir leur enfant dans cette
                            réflexion.
                            Cette conférence-atelier a présenté les éléments indispensables à mettre en pratique pour
                            comprendre un adolescent et l’accompagner au mieux au cours de cette étape clé.
                            Les participants ont également eu l’opportunité d’apprendre ce qu’il se cache derrière
                            certains termes spécifiques de l’enseignement supérieur tels que : unité d’enseignement
                            (UE), activité d’apprentissage (AA), crédits ECTS, quadrimestre…
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center text-orange">
                <a href="/news/slug"
                   class="flex items-center self-end gap-4 mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                         class="-scale-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('actualité précedente')}}</span>
                </a>
                <a href="/news/slug"
                   class="flex items-center self-end gap-4 mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                    <span>{{__('actualité suivante')}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                         class="fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            <div class="flex flex-col gap-5">
                <h2 class="font-display font-semibold text-blue text-xl tracking-wider">{{__('Autres actualités dans :category')}}</h2>
                <div class="flex flex-col gap-2">
                    <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                        @for($i = 0; $i < 3; $i++)
                            <x-news.article/>
                        @endfor
                    </div>
                    <a href="/news"
                       class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                        <span>{{__('Toutes les actualités')}}</span>
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

<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
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
                            par William Bednar dans <a href="#" class="underline underline-offset-2 decoration-1 decoration-solid hover:text-orange">conseil</a></p>
                        <div class="relative">
                            <a href="#share" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="28"
                                     class="fill-orange">
                                    <path
                                        d="M25,20a5,5,0,0,0-3.91,1.93l-9.28-4.64A5,5,0,0,0,12,16a5,5,0,0,0-.19-1.29l9.28-4.64A5,5,0,0,0,25,12a5,5,0,1,0-5-5,5,5,0,0,0,.19,1.29l-9.28,4.64A5,5,0,0,0,7,11,5,5,0,0,0,7,21a5,5,0,0,0,3.91-1.93l9.28,4.64A5,5,0,1,0,25,20ZM25,4a3,3,0,1,1-3,3A3,3,0,0,1,25,4ZM7,19a3,3,0,1,1,3-3A3,3,0,0,1,7,19Zm18,9a3,3,0,1,1,3-3A3,3,0,0,1,25,28Z"/>
                                </svg>
                            </a>
                            <div
                                class="hidden p-3 bg-white border border-orange-light rounded-lg flex flex-col gap-4 absolute -right-3 -top-3">
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center justify-between">
                                        <p class="text-lg font-semibold">{{__('Partager sur')}}</p>
                                        <a href="#close">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="28"
                                                 class="fill-orange">
                                                <path
                                                    d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <ul class="flex items-center justify-between">
                                        <li>
                                            <a href="https://www.linkedin.com">
                                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     height="36"
                                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                                     aria-labelledby="linkedinTitle"
                                                     xml:space="preserve">
                                            <title
                                                id="linkedinTitle">{{__('Se rendre sur le linkedin de :name')}}</title>
                                                    <style type="text/css">
                                                        .linkedin-blue {
                                                            fill: #006699;
                                                        }

                                                        .linkedin-white {
                                                            fill-rule: evenodd;
                                                            clip-rule: evenodd;
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g id="linkedin">
                                                        <path id="path14" class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
                                                        <path id="path28" class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
                                                        <path id="path30" class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
                                                    </g>
                                        </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com">
                                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     height="36"
                                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                                     aria-labelledby="linkedinTitle"
                                                     xml:space="preserve">
                                            <title
                                                id="linkedinTitle">{{__('Se rendre sur le linkedin de :name')}}</title>
                                                    <style type="text/css">
                                                        .linkedin-blue {
                                                            fill: #006699;
                                                        }

                                                        .linkedin-white {
                                                            fill-rule: evenodd;
                                                            clip-rule: evenodd;
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g id="linkedin">
                                                        <path id="path14" class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
                                                        <path id="path28" class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
                                                        <path id="path30" class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
                                                    </g>
                                        </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com">
                                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     height="36"
                                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                                     aria-labelledby="linkedinTitle"
                                                     xml:space="preserve">
                                            <title
                                                id="linkedinTitle">{{__('Se rendre sur le linkedin de :name')}}</title>
                                                    <style type="text/css">
                                                        .linkedin-blue {
                                                            fill: #006699;
                                                        }

                                                        .linkedin-white {
                                                            fill-rule: evenodd;
                                                            clip-rule: evenodd;
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g id="linkedin">
                                                        <path id="path14" class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
                                                        <path id="path28" class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
                                                        <path id="path30" class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
                                                    </g>
                                        </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com">
                                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     height="36"
                                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                                     aria-labelledby="linkedinTitle"
                                                     xml:space="preserve">
                                            <title
                                                id="linkedinTitle">{{__('Se rendre sur le linkedin de :name')}}</title>
                                                    <style type="text/css">
                                                        .linkedin-blue {
                                                            fill: #006699;
                                                        }

                                                        .linkedin-white {
                                                            fill-rule: evenodd;
                                                            clip-rule: evenodd;
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g id="linkedin">
                                                        <path id="path14" class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
                                                        <path id="path28" class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
                                                        <path id="path30" class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
                                                    </g>
                                        </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com">
                                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     height="36"
                                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                                     aria-labelledby="linkedinTitle"
                                                     xml:space="preserve">
                                            <title
                                                id="linkedinTitle">{{__('Se rendre sur le linkedin de :name')}}</title>
                                                    <style type="text/css">
                                                        .linkedin-blue {
                                                            fill: #006699;
                                                        }

                                                        .linkedin-white {
                                                            fill-rule: evenodd;
                                                            clip-rule: evenodd;
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g id="linkedin">
                                                        <path id="path14" class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
                                                        <path id="path28" class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
                                                        <path id="path30" class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
                                                    </g>
                                        </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="text-sm">{{__('Lien de la page')}}</p>
                                    <div
                                        class="px-3 py-2 bg-white border border-orange-light rounded-lg flex items-center justify-between gap-4 text-sm">
                                        <p class="truncate font-light">
                                            https://www.webdesign.be/projects/gwenaelle-batta/portfolio</p>
                                        <a href="#">copy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

@php
    $showJob = true;
    $name = 'Développeur Web front-end';
    $definition = 'La mission d’un développeur Web front-end consiste à participer à la création de l’interface utilisateur d’un site ou d’une application web. Il intervient sur tous les éléments apparaissant à l’écran et géré par le navigateur web de l’utilisateur. Il y a donc une partie design/ergonomie et une partie développement dans sa mission.';
@endphp
<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="slug" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/alumnis"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full" aria-labelledby="projectsTitle">
                        <title id="projectsTitle">{{__('Retourner sur la page des projets')}}</title>
                        <path id="projects-link"
                              d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                              transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('Retour aux élèves')}}</span>
                </a>
                <div class="flex justify-between">
                    <div class="flex gap-6">
                        <img src="https://placehold.jp/120x120.png" alt="nom-de-leleve" height="120"
                             width="120"
                             class="rounded-full">
                        <div class="flex flex-col gap-3">
                            <h2 id="slug"
                                class="font-display font-bold text-blue text-4xl tracking-wider uppercase">{{__("Gwenaëlle Batta")}}</h2>
                            <div class="text-lg">
                                <p>{{__('Étudiante 2021 - 2022')}}</p>
                                <div class="flex gap-3">
                                    <a href="mailto:gwenaelle.batta@student.hepl.be"
                                       class="hover:text-orange hover:underline hover:underline-offset-2 transition ease-in-out duration-200">gwenaelle.batta@student.hepl.be</a>
                                    <div class="bg-blue/50 h-max-content w-px"></div>
                                    <a href="https://gwenaelle-batta.be/"
                                       class="hover:text-orange hover:underline hover:underline-offset-2 transition ease-in-out duration-200">gwenaelle-batta.be</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li><a href="https://github.com/">
                                <svg version="1.1" id="github" xmlns="http://www.w3.org/2000/svg"
                                     x="0px" y="0px" height="36"
                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                     aria-labelledby="githubTitle"
                                     xml:space="preserve">
                                            <title id="githubTitle">{{__('Se rendre sur le github de :name')}}</title>
                                    <style type="text/css">
                                        .github_gray {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #1B1F23;
                                        }
                                    </style>
                                    <path class="github_gray" d="M10,0C4.5,0,0,4.5,0,10c0,4.4,2.9,8.2,6.8,9.5c0.5,0.1,0.7-0.2,0.7-0.5c0-0.2,0-1,0-1.9C5,17.6,4.3,16.5,4.2,16
                                            c-0.1-0.3-0.6-1.2-1-1.4c-0.3-0.2-0.8-0.6,0-0.7c0.8,0,1.4,0.7,1.5,1C5.6,16.4,7,16,7.6,15.8c0.1-0.6,0.3-1.1,0.6-1.3
                                            C6,14.2,3.7,13.3,3.7,9.5c0-1.1,0.4-2,1-2.7C4.6,6.5,4.2,5.5,4.8,4.1c0,0,0.8-0.3,2.8,1C8.3,4.9,9.2,4.8,10,4.8
                                            c0.8,0,1.7,0.1,2.5,0.3c1.9-1.3,2.8-1,2.8-1c0.5,1.4,0.2,2.4,0.1,2.7c0.6,0.7,1,1.6,1,2.7c0,3.8-2.3,4.7-4.6,4.9
                                            c0.4,0.3,0.7,0.9,0.7,1.9c0,1.3,0,2.4,0,2.8c0,0.3,0.2,0.6,0.7,0.5c4-1.3,6.8-5.1,6.8-9.5C20,4.5,15.5,0,10,0z"/>
                                        </svg>
                            </a></li>
                        <li><a href="https://www.linkedin.com">
                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                     x="0px" y="0px" height="36"
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
                                    <g>
                                        <path class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
                                        <path class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
                                        <path class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
                                    </g>
                                        </svg>
                            </a></li>
                    </ul>
                </div>
                <div>
                    <p>{{__('Amet non laboris commodo sint occaecat. Occaecat cupidatat labore tempor ea veniam nulla ipsum. Aliquip cillum est minim nulla est. Ipsum in occaecat consectetur aute qui tempor duis minim fugiat. Voluptate magna ad commodo non adipisicing reprehenderit nostrud id voluptate minim eu mollit enim dolore commodo. Consequat labore ullamco elit excepteur in duis quis proident do enim incididunt occaecat est est commodo.')}}</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-11">
                <section aria-labelledby="internship" class="col-span-1">
                    <h3 id="internship"
                        class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{__('À fait son stage chez')}}</h3>
                    <x-partners.article/>
                </section>
                <section aria-labelledby="job" class="col-span-2">
                    <h3 id="job"
                        class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{__('Travaille en tant que')}}</h3>
                    <x-about.opportunity :showJob="$showJob" :name="$name" :definition="$definition"/>
                </section>
            </div>
            <section aria-labelledby="projects" class="flex flex-col gap-5">
                <h2 id="projects"
                    class="font-display font-semibold text-blue text-xl tracking-wider">{{__('Projets de Gwenaëlle')}}</h2>
                <div class="flex flex-col gap-2">
                    <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                        @for($i = 0; $i < 3; $i++)
                            <x-projects.article/>
                        @endfor
                    </div>
                    <a href="/projects"
                       class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                        <span>{{__('Tous ses projets')}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                             class="fill-orange h-full">
                            <path
                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </section>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>
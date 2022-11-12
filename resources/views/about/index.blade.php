@php
    $showJob = false;
    $opportunities = [
        'Designer Web' => "Mi-graphiste, mi-informaticien, le web- designer est spécialisé dans la création des pages Web. Il s’occupe de tout l’aspect graphique d’un site Internet (illustrations, animations, typographie…).",
        'Développeur Web' => "Le développeur web, c’est le responsable de la programmation. Il est en charge de la conception de sites, d’applications, de logiciels et de programmes informatiques « sur-mesure » pour répondre aux besoins de son entreprise ou des clients.",
        'Designer mobile' => "Il crée des designs, des vidéos ou encore des sons pour mettre en valeur les produits et les services de ses clients. Chaque client ayant des attentes différentes, il doit adapter ses créations à la taille des écrans de l’ensemble des terminaux mobiles présents sur le marché (smartphones, tablettes, ordinateurs).",
        'Développeur mobile' => "À partir d’un cahier des charges, le développeur d’applications mobiles réalise une application. Grâce à de solides connaissances en mathématiques et en informatique, il choisit les logiciels et codes spécifiques pour la construire.",
        'Designer multimédia' => "Le designer graphique et multimédia (également appelé webdesigner) est un dessinateur-maquettiste travaillant sur des supports électroniques : pages web, cédéroms, habillage TV ou vidéo. Sa mission ? Donner une identité forte à ces différents supports.",
        'Développeur multimédia' => "Le développeur multimédia construit une application en assemblant et en fusionnant des fichiers de natures différentes : du texte, des sons et des images. Son premier souci : réaliser la navigation la plus évidente possible pour l’utilisateur, autrement dit l’exigence de convivialité du produit multimédia.",
        'Designer d’interfaces (UI)' => "Le designer UI s’occupe du lien entre la machine et l’homme. Il est en charge de la conception générale de l’interface, de la clarté de la navigation, de l’optimisation des parcours et aussi de la qualité des contenus. Il organise des éléments graphiques et textuels sur la base de normes techniques. ",
        'Développeur Web front-end' => "La mission d’un développeur Web front-end consiste à participer à la création de l’interface utilisateur d’un site ou d’une application web. Il intervient sur tous les éléments apparaissant à l’écran et géré par le navigateur web de l’utilisateur. Il y a donc une partie design/ergonomie et une partie développement dans sa mission.",
        'Designer d’expérience utilisateur (UX)' => "L’UX Designer, ou ergonome, a pour mission d’insérer du storytelling dans l’expérience client. Il doit analyser les besoins et les attentes des utilisateurs afin de répondre à leurs attentes et de rendre le site accessible, et facile d’utilisation. Il occupe un rôle stratégique.",
        'Développeur Web back-end' => "Le développeur back-end s’occupe du côté technique et fonctionnel d’un site web. Contrairement au développeur front-end, celui-ci travaille dans l’ombre et se charge de toute la partie back-office, c’est-à-dire les éléments indispensables pour le fonctionnement du site, mais qui sont invisibles des internautes.",
    ];
@endphp
<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="about" class="col-span-3 flex flex-col gap-8">
            <h2 id="about"
                class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('À propos de la section')}}</h2>
            <p class="flex flex-col gap-2">
                <span
                    class="">{{__('Les Bacheliers en Techniques graphiques - orientation Techniques infographiques sont des spécialistes des métiers de l’image numérique interactive, fixe ou en mouvement.')}}</span>
                <span
                    class="">{{__('Au quotidien, les infographistes identifient la demande et les besoins graphiques du client tout en évaluant les contraintes de conception et de réalisation. Ils proposent ensuite des solutions techniques graphiques et créatives qui répondront aux besoins des clients.')}}</span>
                <span
                    class="">{{__('Les étudiants réalisent des projets graphiques d’envergure qui répondent à divers cahiers des charges inspirés du terrain professionnel ou proposés par de vrais clients. Ils ont l’occasion de participer à des concours, festivals et événements graphiques nationaux et internationaux comme WordSkills Belgium. Ils effectuent enfin 12 semaines de stage en milieu professionnel.')}}</span>
            </p>
            <div class="flex flex-col gap-12">
                <section aria-labelledby="classes">
                    <div class="flex flex-col gap-3 mb-6">
                        <h2 id="classes"
                            class="text-4xl font-medium uppercase tracking-wider font-display text-blue">{{__('Programme des cours')}}</h2>
                        <p class="font-light">{{__('Trouvez plus de détails sur les programmes sur le ')}}<a
                                class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid"
                                href="https://www.hepl.be/fr/techniques-infographiques/web#parcours">{{__('site de la HEPL')}}</a>.
                        </p>
                        <p class="flex flex-col gap-2">
                        <span
                            class="">{{__('Au cours du premier bloc, les étudiants découvrent les trois domaines d’activité principale de techniques graphiques : le Web, le Design graphique et la 3D/Vidéo.')}}</span>
                            <span
                                class="">{{__('À partir du deuxième bloc, les étudiants choisissent entre ces trois options.')}}</span>
                        </p>
                    </div>
                    <div class="flex flex-col gap-8">
                        <div class="bg-blue-card p-5 rounded-lg">
                            <h3 class="text-2xl font-semibold mb-3">{{__('Bloc 1')}}</h3>
                            <div class="grid grid-cols-3 gap-12">
                                <div class="">
                                    <h4 class="text-lg font-semibold mb-2">{{__('tronc commun')}}</h4>
                                    <ul class="flex flex-col gap-2">
                                        <li><p
                                                class="flex justify-between">
                                                <span>{{__('Anglais')}}</span><span>30h</span>
                                            </p></li>
                                        <li><p class="flex justify-between">
                                                <span>{{__('Graphisme')}}</span><span>120h</span></p></li>
                                        <li><p class="flex justify-between">
                                                <span>{{__('Typographie et mise en page')}}</span><span>75h</span></p>
                                        </li>
                                        <li><p class="flex justify-between">
                                                <span>{{__('Culture artistique')}}</span><span>30h</span>
                                            </p></li>
                                        <li><p class="flex justify-between">
                                                <span>{{__('Rencontre professionnelle')}}</span><span>15h</span>
                                            </p></li>
                                    </ul>
                                </div>
                                <div class="">
                                    <h4 class="text-lg font-semibold mb-2">{{__('option Web')}}</h4>
                                    <ul class="flex flex-col gap-2">
                                        <li><a href="classes/b-1/slug"
                                               class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                    class="underline underline-offset-2">{{__('Création de page Web - HTML')}}</span><span>60h</span></a>
                                        </li>
                                        <li><a href="classes/b-1/slug"
                                               class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                    class="underline underline-offset-2">{{__('Création de page Web - CSS')}}</span><span>60h</span></a>
                                        </li>
                                        <li><a href="classes/b-1/slug"
                                               class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                    class="underline underline-offset-2">{{__('Design Web')}}</span><span>30h</span></a>
                                        </li>
                                        <li>
                                            <a href="classes/b-1/slug"
                                               class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                    class="underline underline-offset-2">{{__('Initiation à la programmation')}}</span><span>30h</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex flex-col gap-8">
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('option Design Graphique')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            <li>
                                                <p class="flex justify-between">
                                                    <span>{{__('Créations infographiques 2D')}}</span><span>60h</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="flex justify-between">
                                                    <span>{{__('Introduction à l‘image numérique')}}</span><span>30h</span>
                                                </p>
                                            </li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Image et argumentation')}}</span><span>30h</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('option 3D/Vidéo')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            <li>
                                                <p class="flex justify-between">
                                                    <span>{{__('Créations infographiques 3D')}}</span><span>60h</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="flex justify-between">
                                                    <span>{{__('Introduction à l‘animation 3D')}}</span><span>30h</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="flex justify-between">
                                                    <span>{{__('Photo')}}</span><span>30h</span>
                                                </p>
                                            </li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Vidéo')}}</span><span>45h</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between gap-8 items-start">
                            <div class="bg-blue-card p-5 rounded-lg flex-1">
                                <h3 class="text-2xl font-semibold mb-3">{{__('Bloc 2')}}</h3>
                                <div class="flex flex-col gap-4">
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('tronc commun')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            <li><p
                                                    class="flex justify-between">
                                                    <span>{{__('Anglais')}}</span><span>60h</span>
                                                </p></li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Communication')}}</span><span>60h</span></p></li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Entreprise')}}</span><span>60h</span></p>
                                            </li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Graphisme')}}</span><span>90h</span>
                                                </p></li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Culture artistique')}}</span><span>30h</span>
                                                </p></li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('option Web')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Design d‘applications mobiles')}}</span><span>30h</span></a>
                                            </li>
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Développement côté client')}}</span><span>75h</span></a>
                                            </li>
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Développement côté serveur')}}</span><span>60h</span></a>
                                            </li>
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Système de gestion de contenu')}}</span><span>45h</span></a>
                                            </li>
                                            <li>
                                                <a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Multimédia')}}</span><span>50h</span></a>
                                            </li>
                                            <li>
                                                <a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Design Web')}}</span><span>165h</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-blue-card p-5 rounded-lg flex-1">
                                <h3 class="text-2xl font-semibold mb-3">{{__('Bloc 3')}}</h3>
                                <div class="flex flex-col gap-4">
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('tronc commun')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            <li><p
                                                    class="flex justify-between">
                                                    <span>{{__('Anglais')}}</span><span>60h</span>
                                                </p></li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Introduction aux droits d‘auteurs')}}</span><span>15h</span>
                                                </p></li>
                                            <li><p class="flex justify-between">
                                                    <span>{{__('Entreprise')}}</span><span>60h</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('option Web')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Développement d‘applications mobiles')}}</span><span>30h</span></a>
                                            </li>
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Projets Web')}}</span><span>240h</span></a>
                                            </li>
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Projet de fin d‘étude')}}</span><span>210h</span></a>
                                            </li>
                                            <li><a href="classes/b-2/slug"
                                                   class="flex justify-between hover:text-orange transition-all ease-in-out duration-200"><span
                                                        class="underline underline-offset-2">{{__('Stage de 12 semaines en entreprise')}}</span><span>140h</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section aria-labelledby="teachers">
                    <h2 id="teachers"
                        class="text-4xl font-medium uppercase tracking-wider font-display text-blue mb-6">{{__('Nos professeurs')}}</h2>
                    <div class="grid grid-cols-3 gap-8">
                        @for($i = 0; $i < 6; $i++)
                            <div
                                class="rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 p-5 relative">
                                <a href="/teachers/slug" class="full-link">{{__('Voir la fiche de :name')}}</a>
                                <div class="flex justify-between">
                                    <div class="flex flex-col gap-4">
                                        <img src="https://placehold.jp/160x160.png" alt="nom-du-professeur" height="160"
                                             width="160"
                                             class="rounded-full">
                                        <div>
                                            <h3 class="font-semibold text-xl">Prénom Nom</h3>
                                            <p>prénom.nom@hepl.be</p>
                                        </div>
                                    </div>
                                    <ul class="flex flex-col gap-4">
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
                            </div>
                        @endfor
                    </div>
                </section>
                <section aria-labelledby="opportunities">
                    <div class="flex flex-col gap-2 mb-6">
                        <h2 id="opportunities"
                            class="text-4xl font-medium uppercase tracking-wider font-display text-blue">{{__('Les débouchés')}}</h2>
                        <p>{{__('Notre formation permet d’ouvrir un très grand nombre de portes et le milieu de l’informatique ne manque pas de débouchés. Voyez par vous-même et découvrez ce que deviennent ')}}
                            <a href="/alumnis"
                               class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid transition ease-in-out duration-200">{{__('nos anciens élèves')}}</a>
                            !</p>
                    </div>
                    <div class="grid grid-cols-2 gap-8">
                        @foreach($opportunities as $name => $definition)
                            <x-opportunity :showJob="$showJob" :name="$name" :definition="$definition"/>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

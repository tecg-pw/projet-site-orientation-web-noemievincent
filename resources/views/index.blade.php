<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Design</title>
    @vite('resources/css/app.css')
</head>
<body class="text-blue-dark font-body flex flex-col h-screen">
<h1 class="sr-only">
    {{__('Web Design - formation web')}}
</h1>
<x-header/>
<main class="px-10 flex-1">
    <section aria-labelledby="introduction" class="flex gap-12 mt-10">
        <div class="flex flex-col gap-6 col-span-2">
            <h2 id="introduction" class="font-display font-bold text-blue text-7xl tracking-wider uppercase">Web
                Design</h2>
            <p class="font-light leading-7">
                L’option Web forme des spécialistes en design Web, en design d’interaction et en développement
                d’applications mobiles. Les étudiantes et les étudiants sont formés pour être capables de s’occuper des
                aspects visuels des interfaces et des expériences d’utilisation qu’en auront les utilisateurs.
                Leur formation leur permet de gérer les deux aspects : technique et visuel.
                Ils donnent donc vie au projet du designer ou du graphiste et le transforme en un produit qui fonctionne
                dans un environnement technique. Ils connaissent toutes les contraintes techniques qui s’imposent à la
                création, à l’utilisation et à la diffusion du produit, notamment sur les réseaux et les plateformes
                mobiles.
            </p>
            <div class="uppercase flex gap-10 items-center">
                <a href="/about" class="bg-orange text-white py-3 px-12 rounded-lg hover:bg-orange-dark transition ease-in-out duration-200">{{__('En savoir plus')}}</a>
                <a href="https://hepl.be/fr" class="text-orange hover:text-orange-dark hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid transition ease-in-out duration-200">{{__('Visiter le site de l‘HEPL')}}</a>
            </div>
        </div>
        <img src="/img/marvin-meyer-SYTO3xs06fU-unsplash.jpg" alt="">
    </section>
    <div class="grid grid-cols-4 justify-between gap-12 mt-20">
        <div class="col-span-3">
            <section aria-labelledby="projects" class="mb-14 flex flex-col gap-6">
                <h2 id="projects"
                    class="font-display font-medium text-blue text-4xl tracking-wider uppercase">{{__('Les dernières réalisations')}}</h2>
                <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                    @for($i = 0; $i < 6; $i++)
                        <x-projects.article/>
                    @endfor
                </div>
                <a href="/projects" class="flex items-center self-end gap-4 uppercase text-orange text-lg">
                    <span>{{__('Tous les projets')}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8" class="fill-orange h-full">
                        <path id="projects-link"
                              d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                              transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                </a>
            </section>
            <section aria-labelledby="forum" class="flex flex-col gap-6">
                <h2 id="forum"
                    class="font-display font-medium text-blue text-4xl tracking-wider uppercase">{{__('Posez-nous vos questions')}}</h2>
                <div class="flex flex-col gap-6">
                    @for($i = 0; $i < 2; $i++)
                        <x-forum.article/>
                    @endfor
                </div>
                <a href="/forum" class="flex items-center self-end gap-4 uppercase text-orange text-lg">
                    <span>{{__('Toutes les questions')}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8" class="fill-orange h-full">
                        <path id="forum-link"
                              d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                              transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                </a>
            </section>
        </div>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

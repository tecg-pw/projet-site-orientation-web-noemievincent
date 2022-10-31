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
<body class="text-darkblue font-body flex flex-col h-screen">
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
                <a href="/about" class="bg-orange text-white py-3 px-6 rounded-lg">{{__('En savoir plus')}}</a>
                <a href="https://hepl.be/fr" class="text-orange">{{__('Visiter le site de l‘HEPL')}}</a>
            </div>
        </div>
        <img src="/img/marvin-meyer-SYTO3xs06fU-unsplash.jpg" alt="">
    </section>
    <div class="grid grid-cols-4 justify-between gap-12 mt-20">
        <div class="col-span-3">
            <section aria-labelledby="projects" class="mb-14">
                <h2 id="projects"
                    class="font-display font-medium text-blue text-4xl tracking-wider uppercase mb-6">{{__('Les dernières réalisations')}}</h2>
                <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                    @for($i = 0; $i < 6; $i++)
                        <x-projects.article/>
                    @endfor
                </div>
            </section>
            <section aria-labelledby="forum">
                <h2 id="forum"
                    class="font-display font-medium text-blue text-4xl tracking-wider uppercase mb-6">{{__('Posez-nous vos questions')}}</h2>
                <div class="flex flex-col gap-6">
                    @for($i = 0; $i < 2; $i++)
                        <x-forum.article/>
                    @endfor
                </div>
            </section>
        </div>
        <aside class="w-full h-full bg-green-100">
        </aside>
    </div>
</main>
<x-footer/>
</body>
</html>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Design - {{__('Connexion')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body class="text-blue-dark font-body flex flex-col h-screen">
<h1 class="sr-only">
    {{__('Web Design - formation web')}}
</h1>
<header class="uppercase text-blue">
    <div class="bg-blue-light flex items-center justify-between px-10 py-2 text-sm">
        @guest
            <div>
                <a href="/login" class="flex items-center gap-3">
                    <img src="/img/profile-pic.png" alt="{{__('Se connecter')}}"
                         class="rounded-full h-full">
                    <span class="text-orange-dark hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">
                        {{__('Se connecter')}}
                    </span>
                </a>
            </div>
        @endguest
        @auth
            <div class="flex items-center gap-3">
                <a href="/profile" class="flex items-center gap-3">
                    <img src="/img/profile-pic.png" alt="{{__('Prénom Nom')}}" height="30" width="30"
                         class="rounded-full">
                    <span class="hover:text-orange transition-all ease-in-out duration-200">{{__('Prénom Nom')}}</span>
                </a>
                —
                <a href="/logout" class="text-orange-dark hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">{{__('Se déconnecter')}}</a>
            </div>
        @endauth
        <div class="flex gap-16">
            <nav>
                <h2 class="sr-only">{{__('Navigation secondaire')}}</h2>
                <ul class="flex gap-8">
                    <li><a href="/tutorials" class="hover:text-orange transition-all ease-in-out duration-200">{{__('Tutoriels')}}</a></li>
                    <li><a href="/docs" class="hover:text-orange transition-all ease-in-out duration-200">{{__('Documentations')}}</a></li>
                    <li><a href="/faq" class="hover:text-orange transition-all ease-in-out duration-200">{{__('FAQ')}}</a></li>
                </ul>
            </nav>
            <ul class="flex gap-2">
                <li><a href="#" class="font-bold hover:text-orange transition-all ease-in-out duration-200">FR</a></li>
                <li><a href="#" class="hover:text-orange transition-all ease-in-out duration-200">EN</a></li>
                <li><a href="#" class="hover:text-orange transition-all ease-in-out duration-200">DE</a></li>
                <li><a href="#" class="hover:text-orange transition-all ease-in-out duration-200">NL</a></li>
            </ul>
        </div>
    </div>
    <div class="px-10 py-6 bg-white/60">
        <nav class="flex justify-between items-center">
            <h2 class="sr-only">{{__('Navigation principale')}}</h2>
            <a href="/">
                <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="24"
                     viewBox="0 0 128.8 34.8" style="enable-background:new 0 0 128.8 34.8;" xml:space="preserve"
                     class="fill-blue-dark hover:fill-orange transition-all ease-in-out duration-200" aria-labelledby="logoTitle">
                    <title id="logoTitle">{{__('Retourner à l‘accueil')}}</title>
                    <g id="logo">
                        <g id="Groupe_150" transform="translate(4)">
                            <path id="Tracé_56" d="M74.5,10.4h2.2l1.9,7.2l2.1-7.2h1.5l2.1,7.2l1.9-7.2h2.2l-2.9,9.9h-2.2l-1.9-6.2l-1.9,6.2
			h-2.2L74.5,10.4z"/>
                            <path id="Tracé_57"
                                  d="M89.9,10.4h5.5v1.7h-3.6v2.4h3.4v1.7h-3.4v2.4h3.6v1.7h-5.5V10.4z"/>
                            <path id="Tracé_58" d="M97.2,10.4h2.8c0.8-0.1,1.6,0.2,2.2,0.6c0.6,0.5,0.9,1.2,0.8,1.9c0.1,0.9-0.4,1.8-1.3,2.2
			c0.6,0.1,1.2,0.4,1.6,0.8c0.4,0.5,0.6,1.1,0.6,1.7c0,0.8-0.3,1.5-0.9,2c-0.7,0.5-1.5,0.7-2.3,0.7h-3.6L97.2,10.4L97.2,10.4z
			 M99.6,14.4c0.4,0,0.8-0.1,1.2-0.3c0.3-0.2,0.4-0.5,0.4-0.9c0-0.8-0.5-1.2-1.6-1.2h-0.4v2.5h0.4V14.4z M100.1,18.8
			c1.2,0,1.8-0.4,1.8-1.3c0-0.4-0.2-0.8-0.5-1c-0.4-0.3-0.9-0.4-1.4-0.4h-1v2.7C99,18.8,100.1,18.8,100.1,18.8z"/>
                            <path id="Tracé_59" d="M75.6,24.8h2.7c0.7,0,1.4,0.1,2,0.4c1.2,0.5,2.2,1.5,2.7,2.7c0.3,0.6,0.4,1.2,0.4,1.9
			c0,0.7-0.1,1.3-0.4,1.9c-0.3,0.6-0.6,1.1-1.1,1.6c-0.4,0.5-1,0.8-1.6,1c-0.6,0.2-1.3,0.4-2,0.4h-2.7V24.8z M78.1,33
			c0.6,0,1.1-0.1,1.6-0.4c0.4-0.3,0.8-0.7,1.1-1.1c0.3-0.5,0.4-1,0.4-1.6c0-0.6-0.1-1.1-0.4-1.6c-0.2-0.5-0.6-0.9-1.1-1.1
			c-0.5-0.3-1-0.4-1.6-0.4h-0.6V33H78.1z"/>
                            <path id="Tracé_60"
                                  d="M85.3,24.8h5.5v1.7h-3.6v2.4h3.4v1.7h-3.4V33h3.6v1.7h-5.5V24.8z"/>
                            <path id="Tracé_61" d="M94.1,34.6c-0.4-0.2-0.8-0.4-1.2-0.6c-0.3-0.2-0.6-0.4-0.8-0.6l1-1.6c0.2,0.2,0.5,0.4,0.7,0.5
			c0.3,0.2,0.6,0.4,0.9,0.5c0.4,0.1,0.7,0.2,1.1,0.2c0.4,0,0.7-0.1,1-0.3c0.3-0.2,0.4-0.5,0.4-0.9c0-0.3-0.1-0.6-0.3-0.8
			c-0.2-0.2-0.5-0.4-0.8-0.5c-0.4-0.1-0.7-0.3-1.1-0.5c-0.3-0.2-0.7-0.4-1-0.6c-0.3-0.2-0.6-0.5-0.7-0.8c-0.2-0.3-0.4-0.7-0.3-1.1
			c0-0.5,0.1-1,0.4-1.4c0.3-0.4,0.7-0.8,1.1-1.1c0.5-0.3,1.1-0.4,1.7-0.4c0.4,0,0.7,0,1.1,0.1c0.4,0.1,0.7,0.2,1,0.4
			c0.3,0.1,0.5,0.3,0.8,0.5l-0.8,1.5l-0.9-0.6c-0.3-0.2-0.7-0.2-1.1-0.2c-0.4,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.5-0.4,0.8
			c0,0.2,0.1,0.4,0.2,0.5c0.1,0.2,0.3,0.3,0.5,0.4c0.3,0.1,0.5,0.2,0.8,0.3c0.6,0.2,1.1,0.5,1.6,0.8c0.4,0.3,0.8,0.6,1.1,1
			c0.3,0.4,0.4,0.9,0.4,1.4c0,0.6-0.2,1.1-0.5,1.6c-0.3,0.5-0.8,0.8-1.3,1c-0.6,0.2-1.2,0.4-1.9,0.4C95.2,34.9,94.6,34.8,94.1,34.6z
			"/>
                            <path id="Tracé_62" d="M101.4,24.8h1.9v9.9h-1.9V24.8z"/>
                            <path id="Tracé_63" d="M108.2,34.5c-0.6-0.2-1.1-0.6-1.5-1.1c-0.4-0.5-0.8-1-1-1.6c-0.5-1.3-0.5-2.7-0.1-4
			c0.2-0.6,0.6-1.1,1-1.6c0.4-0.5,1-0.9,1.6-1.1c0.7-0.3,1.4-0.4,2.1-0.4c0.6,0,1.3,0.1,1.9,0.3c0.6,0.2,1.2,0.5,1.7,0.9l-0.9,1.5
			c-0.4-0.3-0.8-0.6-1.3-0.8c-0.5-0.2-1-0.3-1.5-0.3c-0.6,0-1.1,0.1-1.6,0.4c-0.4,0.3-0.8,0.7-1,1.2c-0.2,0.5-0.3,1.1-0.3,1.7
			c0,0.6,0.1,1.2,0.4,1.8c0.3,0.5,0.6,0.9,1,1.2c0.4,0.3,0.9,0.4,1.4,0.4c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,0.9-0.8
			c0.2-0.3,0.3-0.7,0.3-1.1v-0.1h-2.6v-1.5h4.6v1.5c0,0.6-0.1,1.2-0.4,1.7c-0.3,0.5-0.6,0.9-1,1.3c-0.4,0.4-0.9,0.7-1.5,0.8
			c-0.5,0.2-1.1,0.3-1.7,0.3C109.3,34.9,108.7,34.8,108.2,34.5z"/>
                            <path id="Tracé_64"
                                  d="M116.7,24.8h1.9l4.3,6.7v-6.7h1.9v9.9h-1.9l-4.3-6.7v6.7h-1.9V24.8z"/>
                        </g>
                        <g id="Groupe_151">
                            <path id="Tracé_65"
                                  d="M0,0h7.6l6.6,25.3L21.5,0h5.1L34,25.3L40.5,0h7.6l-10,34.6h-7.6L24,13.1l-6.5,21.5H10L0,0z"/>
                            <path id="Tracé_66" d="M44.5,0H54c2.4,0,4.7,0.4,6.9,1.3c2.1,0.9,4,2.1,5.6,3.7c3.3,3.2,5.1,7.7,5,12.3
			c0.1,4.6-1.7,9.1-5,12.3c-1.6,1.6-3.5,2.9-5.6,3.7c-2.2,0.9-4.5,1.3-6.9,1.3h-9.5V0z M53.3,28.6c2,0,3.9-0.5,5.6-1.5
			c1.6-1,2.9-2.4,3.9-4c1-1.8,1.5-3.8,1.4-5.8c0-2-0.5-4-1.4-5.8c-0.9-1.7-2.2-3.1-3.9-4c-1.7-1-3.6-1.5-5.6-1.5h-2v22.5h2V28.6z"/>
                        </g>
                    </g>
                </svg>
            </a>
            <ul class="flex justify-between gap-24">
                <li><a href="/projects" class="hover:text-orange transition-all ease-in-out duration-200">{{__('Projets')}}</a></li>
                <li><a href="/alumnis" class="hover:text-orange transition-all ease-in-out duration-200">{{__('Alumnis')}}</a></li>
                <li><a href="/about" class="hover:text-orange transition-all ease-in-out duration-200">{{__('À propos')}}</a></li>
                <li><a href="/news" class="hover:text-orange transition-all ease-in-out duration-200">{{__('Actualités')}}</a></li>
                <li><a href="/forum" class="hover:text-orange transition-all ease-in-out duration-200">{{__('Forum')}}</a></li>
                <li><a href="/jobs" class="hover:text-orange transition-all ease-in-out duration-200">{{__('Stages')}}</a></li>
            </ul>
            <a href="#">
                <svg version="1.1" id="search" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="22"
                     viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve"
                     class="fill-blue-dark" aria-labelledby="searchTitle">
                    <title id="searchTitle">{{__('Faire une recherche')}}</title>
                    <path d="M20.6,19.1c4.1-4.9,3.5-12.3-1.5-16.4S6.8-0.8,2.7,4.2s-3.5,12.3,1.5,16.4c2.1,1.8,4.7,2.7,7.5,2.7
                        c2.7,0,5.4-1,7.5-2.7l9.1,9.1c0.4,0.4,1.1,0.4,1.5,0c0.4-0.4,0.4-1.1,0-1.5L20.6,19.1z M11.6,21.2c-5.3,0-9.5-4.3-9.5-9.5
                        s4.3-9.5,9.5-9.5s9.5,4.3,9.5,9.5C21.2,16.9,16.9,21.2,11.6,21.2C11.6,21.2,11.6,21.2,11.6,21.2z"/>
                </svg>
            </a>
        </nav>
    </div>
</header>

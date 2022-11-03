<x-header/>
<main class="px-10 flex-1 mt-6">
    <section aria-labelledby="404" class="flex flex-col items-center gap-12">
        <div class="flex flex-col items-center">
            <h2 id="404" class="font-bold text-404">404</h2>
            <p class="">{{__('La page que vous cherchez n‘existe pas')}}</p>
        </div>
        <a href="/" class="w-full flex items-center justify-center gap-2 text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="20" class="fill-orange h-full">
                <g>
                    <rect width="24" height="24" opacity="0" transform="rotate(90 12 12)"/>
                    <path
                        d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"/>
                </g>
            </svg>
            <span>{{__('Retourner à l‘accueil')}}</span>
        </a>
    </section>
</main>
<x-footer/>
</body>
</html>

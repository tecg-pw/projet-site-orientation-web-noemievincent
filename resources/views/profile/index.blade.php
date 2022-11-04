<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="username" class="col-span-3 flex flex-col gap-8">
            <h2 id="username"
                class="sr-only">username</h2>
            <div class="flex justify-between items-start">
                <div class="flex gap-8">
                    <img src="https://placehold.jp/120x120.png" alt="nom-de-leleve"
                         class="rounded-full">
                    <div class="mt-2">
                        <p class="text-2xl font-semibold">Prénom Nom</p>
                        <p class="text-lg">Utilisateur <span class="font-light">depuis <time
                                    datetime="">Mai 2020</time></span></p>
                    </div>
                </div>
{{--                @auth()--}}
{{--                    @if('username' = 'auth name')--}}
                    <a href="/username/edit"
                       class="mt-2 flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                        <span>{{__('Modifier mes informations')}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                             class="fill-orange h-full">
                            <path
                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
{{--                    @endif--}}
{{--                @endauth--}}
            </div>
            <p>Elit ex eiusmod proident voluptate. Esse sunt ipsum eiusmod deserunt fugiat nostrud aliqua dolor
                aute minim
                ex aliquip. Enim qui velit ullamco. Sit culpa minim eiusmod laborum esse voluptate esse
                anim.</p>
            <div class="bg-blue/50 h-px w-full"></div>
            <div class="flex flex-col gap-4">
                <h3 class="font-semibold font-display text-xl">{{__('Questions posées et réponses')}}</h3>
                <div class="bg-pink-200">
                    FILTRES
                </div>
                <div class="flex flex-col gap-6">
                    @for($i = 0; $i < 2; $i++)
                        <x-forum.article/>
                    @endfor
                </div>
                <div class="flex flex-col gap-6 hidden">
                    @for($i = 0; $i < 2; $i++)
                        <x-forum.reply/>
                    @endfor
                </div>
            </div>
            <div class="bg-blue/50 h-px w-full"></div>
            {{--                @auth()--}}
            {{--                    @if('username' = 'auth name')--}}
                <div>
                    <h3 class="font-semibold font-display text-xl">{{__('Tutoriels enregistrés')}}</h3>
                    <div class="bg-pink-200">
                        FILTRES
                    </div>
                    <div class="bg-green-200">
                        Tutoriels
                    </div>
                </div>
            {{--                    @endif--}}
            {{--                @endauth--}}
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

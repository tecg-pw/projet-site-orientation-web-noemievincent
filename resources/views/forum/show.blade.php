<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="slug" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/forum"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full" aria-labelledby="questionTitle">
                        <title id="questionTitle">{{__('Retourner sur la page du forum')}}</title>
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('Retour aux questions')}}</span>
                </a>
                <h2 id="slug"
                    class="font-display font-bold text-blue text-4xl tracking-wider uppercase">{{__('Question section Infograpbhie')}}</h2>
            </div>
            <x-forum.question/>
            <div class="flex flex-col gap-8">
                @for($i = 0; $i < 3; $i++)
                    <x-forum.reply/>
                @endfor
                    <a href="#" class="flex items-center gap-4 uppercase text-orange text-sm mt-1">
                        <span>{{__('Plus de réponses')}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6" class="rotate-90 fill-orange h-full">
                            <path
                                  d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                  transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
            </div>

        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

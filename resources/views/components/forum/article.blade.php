<article aria-labelledby="question" class="relative rounded-2xl border border-blue/50 p-3 hover:bg-blue-card transition ease-in-out duration-200">
    <a href="/forum/slug" class="full-link">{{__('Lire la question :name')}}</a>
    <div class="flex flex-col gap-4">
        <div class="flex justify-between">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                     class="fill-green bg-green-light rounded-full p-1">
                    <path
                        d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                </svg>
                <h3 id="question" class="text-xl">{{__('Intitulé de la question')}}</h3>
            </div>
            <a href="#" class="text-sm">{{__('catégorie')}}</a>
        </div>
        <p class="font-light cut-text text-sm">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
            eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua.
        </p>
        <div class="flex justify-between">
            <div class="flex gap-6 items-center text-sm font-light">
                <a href="/profile" class="flex items-center gap-3">
                    <img src="https://placehold.jp/25x25.png" alt="{{__('Prénom Nom')}}"
                         class="rounded-full">
                    <span>{{__('Prénom Nom')}}</span>
                </a>
                |
                <p>5 {{__('réponses')}}</p>
                |
                <time datetime="">dd/mm/yyyy</time>
            </div>
            <a href="forum/slug" class="flex items-center gap-4 uppercase text-orange">
                <span>{{__('Voir la conversation')}}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                     aria-labelledby="questionTitle" class="fill-orange h-full">
                    <title id="questionTitle">{{__('Lire la question :name')}}</title>
                    <path id="link"
                          d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                          transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </div>
</article>

<div class="flex flex-col gap-4">
    <div class="flex gap-4">
        <img src="https://placehold.jp/50x50.png" alt="nom"
             class="rounded-full">
        <div>
            <p class="text-lg font-medium">Prénom Nom</p>
            <p class="text-sm">Statut</p>
        </div>
    </div>
    <div>
        <p>
            Aucun prérequis pour rentrer en infographie. Si ce n’est avoir un minimum de sens
            artistique.
        </p>
    </div>
    <div class="flex gap-4 font-light">
        <p>publiée le
            <time datetime="">dd/mm/yyyy</time>
            à
            <time datetime="">00h00</time>
        </p>
        @if(Request::path() != 'forum/slug')
            <div class="bg-blue/50 h-max-content w-px"></div>
            <p>dans <a href="/forum/slug"
                       class="underline underline-offset-2 decoration-1 decoration-solid hover:text-orange">Intitulé de
                    la question</a></p>
        @endif
    </div>
</div>

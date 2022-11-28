<div class="flex flex-col gap-4">
    <div class="flex gap-4">
        <img src="https://placehold.jp/50x50.png" alt="nom"
             class="rounded-full">
        <div>
            <p class="text-lg font-medium"><a href="/username"
                                              class="hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">Prénom
                    Nom</a></p>
            <p class="text-sm">Statut</p>
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            <p>
                Aucun prérequis pour rentrer en infographie. Si ce n’est avoir un minimum de sens
                artistique.
            </p>
        </div>
        <div class="flex gap-4 font-light">
            {!! __('forum.reply.infos', ['date' => 'dd/yy/mmmm', 'time' => '00:00']) !!}
            @if(Request::path() != 'forum/slug')
                <div class="bg-blue/50 h-max-content w-px"></div>
                {!! __('forum.reply.question', ['question' => 'Intitulé de la question', 'slug' => 'slug']) !!}
            @endif
        </div>
    </div>
</div>

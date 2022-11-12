<article aria-labelledby="actu" class="group relative">
    <a href="/news/slug" class="full-link">{{__('Lire l‘article :name')}}</a>
    <div>
        <div class="p-4 flex flex-col justify-between gap-12 absolute w-full top-0 bottom-0 z-10">
            <h3 id="actu" class="text-white text-2xl">Intitulé de l'actu</h3>
            <div>
                <div class="flex justify-between font-light text-white">
                    <a href="#">catégorie</a>
                    <time datetime="">— dd/mm/yyyy</time>
                </div>
            </div>
        </div>
        <div
            class="relative before:overlay before:bg-blue/40 before:rounded-2xl before:transition before:ease-in-out before:duration-200 group-hover:before:bg-blue/60">
            <img src="https://placehold.jp/424x290.png" height="290" width="424" alt="{{__('Lire l‘article :name')}}"
                 class="object-cover w-full rounded-2xl">
        </div>
    </div>
</article>

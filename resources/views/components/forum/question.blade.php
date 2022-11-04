<div class="flex flex-col gap-6">
    <div class="flex flex-col gap-6">
        <div class="flex gap-4">
            <img src="https://placehold.jp/50x50.png" alt="nom"
                 class="rounded-full h-12">
            <div>
                <p class="text-lg font-medium">Prénom Nom</p>
                <p class="text-sm">Statut</p>
            </div>
        </div>
        <div>
            <p>
                Bonjour à tous ,
                Je me posais une ou deux questions et les voici :
                - Faut-il des connaissances dans le dessin sur pc ou sur papier pour pouvoir faire de
                l’infographie car je n’en ai jamais fait mais les cours m’interessent vraiment.
                - Est ce qu’il faut avoir pratiqué de l’infographie en secondaire pour pouvoir entrer dans cette
                section
                Merci de vos réponses !!! =)
            </p>
        </div>
        <div class="flex justify-between items-center">
            <div class="flex gap-4 font-light">
                <p>publiée le
                    <time datetime="">dd/mm/yyyy</time>
                    à
                    <time datetime="">00h00</time>
                </p>
                <div class="bg-blue/50 h-max-content w-px"></div>
                <p>{{__('catégorie')}}</p>
                <div class="bg-blue/50 h-max-content w-px"></div>
                <p class="flex gap-2 text-green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                         class="fill-green h-full">
                        <path
                            d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>
                    {{__('Résolue')}}
                </p>
            </div>
            @auth()
                <a href="#reply"
                   class="flex items-center gap-4 uppercase text-orange hover:text-orange-dark transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                         class="fill-orange h-full" aria-labelledby="replyTitle">
                        <title id="replyTitle">{{__('Répondre à la question')}}</title>
                        <path
                            d="M17,9.5H7.41l1.3-1.29A1,1,0,0,0,7.29,6.79l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L7.41,11.5H17a1,1,0,0,1,1,1v4a1,1,0,0,0,2,0v-4A3,3,0,0,0,17,9.5Z"/>
                    </svg>
                    <span>{{__('Répondre')}}</span>
                </a>
            @endauth
        </div>
    </div>
    <div class="bg-blue/50 h-px w-full"></div>
    <div class="flex flex-col gap-6">
        @guest()
            <p>
                <a href="/login" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">Connectez-vous</a>
                ou <a href="/register" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">créez
                    un compte</a> pour répondre.
            </p>
        @endguest
        @auth()
            <form action="/forum/slug/reply" class="flex flex-col gap-4">
                <label for="reply" class="sr-only">{{__('Votre réponse')}}</label>
                <textarea name="reply" id="reply" cols="30" rows="10"
                          class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200"></textarea>
                <div class="flex gap-8 items-center justify-end">
                    <a href="#" class="uppercase text-orange">{{__('Annuler')}}</a>
                    <button type="submit"
                            class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                             class="fill-white h-full" aria-labelledby="replyTitle">
                            <title id="replyTitle">{{__('Répondre à la question')}}</title>
                            <path
                                d="M17,9.5H7.41l1.3-1.29A1,1,0,0,0,7.29,6.79l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L7.41,11.5H17a1,1,0,0,1,1,1v4a1,1,0,0,0,2,0v-4A3,3,0,0,0,17,9.5Z"/>
                        </svg>
                        <span>{{__('Répondre')}}</span>
                    </button>
                </div>
            </form>
        @endauth
        <div class="bg-blue/50 h-px w-full"></div>
    </div>
</div>

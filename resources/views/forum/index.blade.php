<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="forum" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="forum"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Forum')}}</h2>
                <p class="text-lg ">{{__('Reprehenderit voluptate sit nisi nisi irure quis laborum amet excepteur velit dolore dolor
dolore aliqua. N’oubliez pas de jeter un oeil à notre ')}} <a href="/faq"
                                                              class="underline underline-offset-2 decoration-1 decoration-solid text-orange">FAQ</a>
                </p>
            </div>
            <div class="flex flex-col">
                @guest()
                    <p>
                        <a href="/login" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">Connectez-vous</a>
                        ou <a href="/register"
                              class="underline underline-offset-2 decoration-1 decoration-solid text-orange">créez un
                            compte</a> pour poser une question
                    </p>
                @endguest
                @auth()
                    <a href="/forum/create"
                       class="flex self-start gap-2 uppercase bg-orange text-white py-3 pl-5 pr-7 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             class="fill-white" aria-labelledby="forumTitle">
                            <title id="forumTitle">{{__('Poser une question')}}</title>
                            <path
                                d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                        </svg>
                        <span>{{__('Poser une question')}}</span>
                    </a>
                @endauth
            </div>
            @auth()
                <div class="flex flex-col gap-6">
                    <form action="forum/create" class="flex flex-col gap-4">
                        <fieldset class="flex flex-col gap-2">
                            <label for="subject" class="text-lg">{{__('Sujet de la question')}}</label>
                            <input type="text" id="subject"
                                   class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                        </fieldset>
                        <fieldset class="flex flex-col gap-2">
                            <label for="reply" class="text-lg sr-only">{{__('Message')}}</label>
                            <textarea name="reply" id="reply" cols="30" rows="10"
                                      class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200"></textarea>
                        </fieldset>
                        <fieldset class="flex gap-2">
                            <label for="category" class="text-lg">{{__('Catégorie de la question')}} :</label>
                            <select name="category" id="category" class="rounded-lg px-4">
                                <option value="category">Catégorie</option>
                                @for($i = 1; $i < 5; $i++)
                                    <option value="category-{{$i}}">Catégorie {{$i}}</option>
                                @endfor
                            </select>
                        </fieldset>
                        <div class="flex gap-8 items-center justify-end">
                            <a href="#" class="uppercase text-orange">{{__('Annuler')}}</a>
                            <button type="submit"
                                    class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">{{__('Poser ma question')}}
                            </button>
                        </div>
                    </form>
                    <div class="bg-blue/50 h-px w-full"></div>
                </div>
            @endauth
            <div class="bg-pink-200">
                FILTRES
            </div>
            <div class="flex flex-col gap-20">
                <div class="flex flex-col gap-6">
                    @for($i = 0; $i < 5; $i++)
                        <x-forum.article/>
                    @endfor
                </div>
                <div class="bg-pink-200">
                    PAGINATION
                </div>
            </div>
            <div class="flex flex-col gap-20">
                <div class="flex flex-col gap-10">
                    @for($i = 0; $i < 5; $i++)
                        <x-forum.reply/>
                    @endfor
                </div>
                <div class="bg-pink-200">
                    PAGINATION
                </div>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

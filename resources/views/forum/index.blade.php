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
                    <div class="flex justify-between items-center">
                        <a href="/forum?ask-a-question"
                           class="flex self-start gap-2 uppercase bg-orange text-white py-3 pl-5 pr-7 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 class="fill-white" aria-labelledby="forumTitle">
                                <title id="forumTitle">{{__('Poser une question')}}</title>
                                <path
                                    d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                            </svg>
                            <span>{{__('Poser une question')}}</span>
                        </a>
                        <p>
                            Retrouvez vos questions et réponses sur votre
                            <a href="/profile" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">profil</a>
                        </p>
                    </div>
                @endauth
            </div>
            @auth()
                <div class="flex flex-col gap-6">
                    <form action="forum/create" class="flex flex-col gap-4">
                        @csrf
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
            <div class="flex flex-col gap-3">
                <div class="flex gap-6 items-center">
                    <p class="uppercase text-lg">{{__('Filtrer par')}}</p>
                    <a href="#" class="text-orange text-xs">{{__('supprimer les filtres')}}</a>
                </div>
                <div class="grid grid-cols-3 gap-x-11">
                    <div class="flex gap-4 col-span-2 text-sm items-center">
                        <a href="?last-subjects"
                           class="rounded-lg py-1 px-3 bg-white border border-blue/40 {{$_SERVER['QUERY_STRING'] === 'last-subjects' || $_SERVER['QUERY_STRING'] === '' ? 'bg-blue/20' : ''}}">{{__('Derniers sujets')}}</a>
                        <a href="?last-replies"
                           class="rounded-lg py-1 px-3 bg-white border border-blue/40 {{$_SERVER['QUERY_STRING'] === 'last-replies' ? 'bg-blue/20' : ''}}">{{__('Dernières réponses')}}</a>
                        <x-filters.forum-categories/>
                        <x-filters.forum-status/>
                    </div>
                    <div class="flex col-start-3">
                        <label for="search-keyword" class="h-full flex-1">
                            <span class="sr-only">
                                {{__('Recherchez un mot clé')}}
                            </span>
                            <input placeholder="Recherchez un mot clé" type="search" id="search-keyword"
                                   class="h-full w-full pl-3 py-1 border border-orange-light border-r-0 focus:outline-none rounded-l-lg placeholder:font-light transition ease-in-out duration-200">
                        </label>
                        <button
                            class="bg-orange text-white h-full px-3 rounded-r-lg uppercase hover:bg-orange-dark transition ease-in-out duration-200">
                            <svg version="1.1" id="search" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="18"
                                 viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve"
                                 class="fill-white">
                            <path d="M20.6,19.1c4.1-4.9,3.5-12.3-1.5-16.4S6.8-0.8,2.7,4.2s-3.5,12.3,1.5,16.4c2.1,1.8,4.7,2.7,7.5,2.7
                        c2.7,0,5.4-1,7.5-2.7l9.1,9.1c0.4,0.4,1.1,0.4,1.5,0c0.4-0.4,0.4-1.1,0-1.5L20.6,19.1z M11.6,21.2c-5.3,0-9.5-4.3-9.5-9.5
                        s4.3-9.5,9.5-9.5s9.5,4.3,9.5,9.5C21.2,16.9,16.9,21.2,11.6,21.2C11.6,21.2,11.6,21.2,11.6,21.2z"/>
                </svg>
                            <span class="sr-only">
                            {{__('Recherche')}}
                        </span></button>
                    </div>
                </div>
            </div>
            @if($_SERVER['QUERY_STRING'] === 'last-subjects' || $_SERVER['QUERY_STRING'] === '')

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
            @endif

            @if($_SERVER['QUERY_STRING'] === 'last-replies')
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
            @endif
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

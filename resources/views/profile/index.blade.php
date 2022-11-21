<x-header :head_title="'Nom de l‘utilisateur'"/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
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
                    <span>{{__('profile.edit_link')}}</span>
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
                <h3 class="font-semibold font-display text-xl">{{__('profile.forum_title')}}</h3>
                <div class="flex flex-col gap-3">
                    <div class="grid grid-cols-3 gap-x-11">
                        <div class="flex gap-12 col-span-2">
                            {{--                            @if('username' = 'auth name')--}}
                            {{--                                <a href="?forum-tab=questions"--}}
                            {{--                                   class="uppercase text-lg text-orange underline {{$_SERVER['QUERY_STRING'] === 'forum-tab=questions' || $_SERVER['QUERY_STRING'] === '' ? 'font-bold' : ''}}">{{__('Mes questions')}}</a>--}}
                            {{--                                <a href="?forum-tab=replies"--}}
                            {{--                                   class="uppercase text-lg text-orange underline {{$_SERVER['QUERY_STRING'] === 'forum-tab=replies' ? 'font-bold' : ''}}">{{__('Mes réponses')}}</a>--}}
                            {{--                            @else--}}
                            <a href="?forum-tab=questions"
                               class="uppercase text-lg text-orange {{Request::input('forum-tab') === 'questions' || Request::all() == null ? 'font-bold' : 'underline'}}">{{__('Ses questions')}}</a>
                            <a href="?forum-tab=replies"
                               class="uppercase text-lg text-orange {{Request::input('forum-tab') === 'replies' ? 'font-bold' : 'underline'}}">{{__('Ses réponses')}}</a>
                            {{--                            @endif--}}
                        </div>
                        <x-filters.search/>
                    </div>
                </div>
                @if(Request::input('forum-tab') === 'questions' || Request::all() == null)
                    <div class="flex flex-col gap-6">
                        @for($i = 0; $i < 2; $i++)
                            <x-forum.article/>
                        @endfor
                    </div>
                @endif

                @if(Request::input('forum-tab') === 'replies')
                    <div class="flex flex-col gap-6">
                        @for($i = 0; $i < 2; $i++)
                            <x-forum.reply/>
                        @endfor
                    </div>
                @endif
            </div>
            <div class="bg-blue/50 h-px w-full"></div>
            {{--                @auth()--}}
            {{--                    @if('username' = 'auth name')--}}
            <div>
                <h3 class="font-semibold font-display text-xl">{{__('profile.tutorials_title')}}</h3>
                <div class="flex flex-col gap-3">
                    <div class="flex gap-6 items-center">
                        <p class="uppercase text-lg">{{__('filters.title')}}</p>
                        <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                    </div>
                    <div class="grid grid-cols-3 gap-x-11">
                        <div class="flex gap-4 col-span-2">
                            <x-filters.languages/>
                        </div>
                        <x-filters.search/>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 mt-6">
                    @for($i = 0; $i < 3; $i++)
                        <x-resources.tutorial/>
                    @endfor
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

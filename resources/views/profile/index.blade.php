<x-header :head_title="$user->fullname"/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$user->slug}}" class="col-span-3 flex flex-col gap-8">
            <h2 id="{{$user->slug}}"
                class="sr-only">{{$user->fullname}}</h2>
            <div class="flex justify-between items-start">
                <div class="flex gap-8">
                    <img src="https://placehold.jp/120x120.png" alt="{{$user->fullname}}"
                         class="rounded-full">
                    <div class="mt-2">
                        <p class="text-2xl font-semibold">{{$user->fullname}}</p>
                        {!! __('profile.infos', ['datetime' => $user->created_at->format('m-Y'), 'date' => $user->created_at->format('F Y')]) !!}
                    </div>
                </div>
                {{--                @auth()--}}
                {{--                    @if('username' = 'auth name')--}}
                <a href="/{{app()->getLocale()}}/users/{{$user->slug}}/edit"
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
            <p>{{$user->bio}}</p>
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
                        @foreach($questions as $question)
                            <x-forum.article :question="$question"/>
                        @endforeach
                    </div>
                @endif

                @if(Request::input('forum-tab') === 'replies')
                    <div class="flex flex-col gap-6">
                        @foreach($replies as $reply)
                            <x-forum.reply :reply="$reply"/>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="bg-blue/50 h-px w-full"></div>
            {{--                @auth()--}}
            {{--                    @if('username' = 'auth name')--}}
            <div>
                <h3 class="font-semibold font-display text-xl">{{__('profile.tutorials_title')}}</h3>
                <div class="flex flex-col gap-3">
                    <div class="grid grid-cols-3 gap-x-11">
                        <div class="flex gap-6 items-center col-span-2">
                            <p class="uppercase text-lg">{{__('filters.title')}}</p>
                            <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                        </div>
                        <x-filters.search/>
                    </div>
                    <form class="flex col-span-2 items-center justify-between">
                        @csrf
                        <div class="flex gap-4">
                            <x-filters.languages :languages="$languages"/>
                        </div>
                        <button type="submit"
                                class="font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                            {{__('filters.filter_button')}}
                        </button>
                    </form>
                </div>
                <div class="grid grid-cols-2 gap-8 mt-6">
                    @foreach($tutorials as $tutorial)
                        <x-resources.tutorial :tutorial="$tutorial" :is_favorite="true"/>
                    @endforeach
                </div>
            </div>
            {{--                    @endif--}}
            {{--                @endauth--}}
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

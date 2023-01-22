<x-header :head_title="$user->fullname" :id="'user_profile'"/>
<main class="main">
    @if(session('success'))
        <div class="bg-green-success text-white text-center p-3 -mt-10 mb-8">
            <p>{{session('success')}}</p>
        </div>
    @endif
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$user->slug}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col justify-between items-start md:flex-row">
                <div class="flex gap-8">
                    <picture>
                        <img
                            src="{{$user->pictures && $user->pictures['full'] ? '/' . $user->pictures['full'] : '/img/placeholders/person-160x160.png'}}"
                            alt="{{$user->name}}" class="rounded-full">
                    </picture>
                    <div class="mt-2">
                        <h2 id="{{$user->slug}}" class="text-2xl font-semibold">{{$user->fullname}}</h2>
                        @if($user->role == 'user')
                            {!! __('profile.user_infos', ['role' => trans_choice("roles." . $user->role, $user->gender),'datetime' => $user->created_at->translatedFormat('Y-m'), 'date' => ucwords($user->created_at->translatedFormat('F Y'))]) !!}
                        @else
                            {!! __('profile.infos', ['role' => trans_choice("roles." . $user->role, $user->gender)]) !!}
                        @endif
                    </div>
                </div>
                @auth
                    @if($user->slug === auth()->user()->slug)
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
                    @endif
                @endauth
            </div>
            <div class="wysiwyg">
                {!! $user->bio !!}
            </div>
            <div class="bg-blue/50 h-px w-full"></div>
            <div class="flex flex-col gap-4">
                <h3 class="font-semibold font-display text-xl">{{__('profile.forum_title')}}</h3>
                <div class="flex gap-12 col-span-2">
                    @if(auth()->user() && $user->slug === auth()->user()->slug)
                        <a href="?forum-tab=questions"
                           class="uppercase text-lg text-orange underline {{Request::query('forum-tab') === 'questions' || Request::all() == null ? 'font-bold' : ''}}">{{__('profile.forum_tabs.user.questions')}}</a>
                        <a href="?forum-tab=replies"
                           class="uppercase text-lg text-orange underline {{Request::query('forum-tab') === 'replies' ? 'font-bold' : ''}}">{{__('profile.forum_tabs.user.replies')}}</a>
                    @else
                        <a href="?forum-tab=questions"
                           class="uppercase text-lg text-orange {{Request::input('forum-tab') === 'questions' || Request::all() == null ? 'font-bold' : 'underline'}}">{{trans_choice('profile.forum_tabs.guest.questions', $user->gender)}}</a>
                        <a href="?forum-tab=replies"
                           class="uppercase text-lg text-orange {{Request::input('forum-tab') === 'replies' ? 'font-bold' : 'underline'}}">{{trans_choice('profile.forum_tabs.guest.replies', $user->gender)}}</a>
                    @endif
                </div>
                @if(Request::query('forum-tab') === 'questions' || Request::all() == null)
                    @if(count($questions) === 0)
                        @auth()
                            @if($user->slug === auth()->user()->slug)
                                {{__('profile.user.no_questions')}}
                            @else
                                {{__('profile.guest.no_questions', ['name' => $user->firstname])}}
                            @endif
                        @elseguest()
                            {{__('profile.guest.no_questions', ['name' => $user->firstname])}}
                        @endauth
                    @else
                        <div class="flex flex-col gap-6">
                            @foreach($questions as $question)
                                <x-forum.article :question="$question"
                                                 :category="$question->category->translations->where('locale', app()->getLocale())->first()"/>
                            @endforeach
                        </div>
                    @endif
                @endif
                @if(Request::query('forum-tab') === 'replies')
                    @if(count($replies) === 0)
                        @auth()
                            @if($user->slug === auth()->user()->slug)
                                {{__('profile.user.no_replies')}}
                            @else
                                {{__('profile.guest.no_replies', ['name' => $user->firstname])}}
                            @endif
                        @elseguest()
                            {{__('profile.guest.no_replies', ['name' => $user->firstname])}}
                        @endauth
                    @else
                        <div class="flex flex-col gap-6">
                            @foreach($replies as $reply)
                                <x-forum.reply :reply="$reply" :question="$reply->question"/>
                            @endforeach
                        </div>
                    @endif
                @endif
            </div>
            @auth
                @if($user->slug === auth()->user()->slug)
                    <div class="bg-blue/50 h-px w-full"></div>
                    <div class="flex flex-col gap-4">
                        <h3 class="font-semibold font-display text-xl">{{__('profile.tutorials_title')}}</h3>
                        <x-filters.container :url="$url">
                            <x-filters.languages :languages="$languages"/>
                        </x-filters.container>
                        <div id="container">
                            <x-tutorials.paginated_tutorials :tutorials="$tutorials"/>
                        </div>
                    </div>
                @endif
            @endauth
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

<x-header :head_title="'forum.head_title'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="forum" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="forum"
                    class="h2">{{__('forum.title')}}</h2>
                {!! __('forum.tagline') !!}
            </div>
            @if(session('success'))
                <div class="bg-green-success text-white text-center p-3">
                    <p>{{session('success')}}</p>
                </div>
            @endif
            <div class="flex flex-col">
                @guest()
                    {!!__('forum.guest_link', ['locale' => app()->getLocale()])!!}
                @endguest
                @auth()
                    <div class="flex flex-col gap-4 justify-between items-center sm:flex-row">
                        <a href="/{{app()->getLocale()}}/forum/create"
                           class="flex self-start gap-2 uppercase bg-orange text-white py-3 pl-5 pr-7 rounded-lg hover:bg-orange-dark transitionable">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 class="fill-white">
                                <path
                                    d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                            </svg>
                            <span>{{__('forum.ask_question')}}</span>
                        </a>
                        {!! __('forum.profile_link', ['slug' => auth()->user()->slug]) !!}
                    </div>
                @endauth
            </div>
            <div class="flex flex-col gap-3">
                <div class="lg:grid lg:grid-cols-3 lg:gap-x-11">
                    <div class="flex gap-6 items-center col-span-2">
                        <p class="uppercase text-lg">{{__('filters.title')}}</p>
                        <a href="#" class="text-orange text-xs">{{__('filters.clear_link')}}</a>
                    </div>
                    <x-filters.search/>
                </div>
                <form class="flex flex-col gap-2 sm:flex-row sm:col-span-2 sm:items-center sm:justify-between">
                    @csrf
                    <div class="flex flex-col gap-2 sm:flex-row sm:gap-4">
                        <x-filters.forum-categories :categories="$categories"/>
                        <x-filters.forum-status/>
                    </div>
                    <button type="submit"
                            class="self-start font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transitionable">
                        {{__('filters.filter_button')}}
                    </button>
                </form>
            </div>
            <div class="flex gap-4">
                <a href="?last-subjects"
                   class="rounded-lg py-1 px-3 border border-blue/40 {{Request::has('last-subjects') || Request::all() == null ? 'bg-blue/20' : 'bg-white'}}">{{__('forum.last_subjects')}}</a>
                <a href="?last-replies"
                   class="rounded-lg py-1 px-3 border border-blue/40 {{Request::has('last-replies') ? 'bg-blue/20' : 'bg-white'}}">{{__('forum.last_replies')}}</a>
            </div>
            @if(Request::has('last-subjects') || Request::all() == null)
                <x-forum.last-subjects :questions="$questions"/>
            @endif

            @if(Request::has('last-replies'))
                <x-forum.last-replies :replies="$replies"/>
            @endif
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

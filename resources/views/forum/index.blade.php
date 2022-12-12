<x-header :head_title="'forum.head_title'"/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="forum" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="forum"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('forum.title')}}</h2>
                {!! __('forum.tagline') !!}
            </div>
            <div class="flex flex-col">
                @guest()
                    {!!__('forum.guest_link', ['locale' => app()->getLocale()])!!}
                @endguest
                @auth()
                    <div class="flex justify-between items-center">
                        <a href="/{{app()->getLocale()}}/forum?ask-a-question"
                           class="flex self-start gap-2 uppercase bg-orange text-white py-3 pl-5 pr-7 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 class="fill-white">
                                <path
                                    d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                            </svg>
                            <span>{{__('forum.ask_question')}}</span>
                        </a>
                        {!! __('forum.profile_link') !!}
                    </div>
                @endauth
            </div>
            @auth()
                <div class="flex flex-col gap-6">
                    <form action="forum/create" class="flex flex-col gap-4">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <label for="subject" class="text-lg">{{__('forms.labels.subjects')}}</label>
                            <input type="text" id="subject"
                                   class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="reply" class="text-lg sr-only">{{__('forms.labels.message')}}</label>
                            <textarea name="reply" id="reply" cols="30" rows="10"
                                      class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200"></textarea>
                        </div>
                        <div class="flex gap-2">
                            <label for="category" class="text-lg">{{__('forms.labels.category')}} :</label>
                            <select name="category" id="category" class="rounded-lg px-4">
                                <option value="category">Catégorie</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->slug}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex gap-8 items-center justify-end">
                            <a href="#" class="uppercase text-orange">{{__('forms.links.cancel')}}</a>
                            <button type="submit"
                                    class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">{{__('forms.buttons.post_question')}}
                            </button>
                        </div>
                    </form>
                    <div class="bg-blue/50 h-px w-full"></div>
                </div>
            @endauth
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
                        <a href="?last-subjects"
                           class="rounded-lg py-1 px-3 border border-blue/40 {{Request::has('last-subjects') || Request::all() == null ? 'bg-blue/20' : 'bg-white'}}">{{__('forum.last_subjects')}}</a>
                        <a href="?last-replies"
                           class="rounded-lg py-1 px-3 border border-blue/40 {{Request::has('last-replies') ? 'bg-blue/20' : 'bg-white'}}">{{__('forum.last_replies')}}</a>
                        <x-filters.forum-categories :categories="$categories"/>
                        <x-filters.forum-status/>
                    </div>
                    <button type="submit"
                            class="font-light bg-orange text-white py-1 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                        {{__('filters.filter_button')}}
                    </button>
                </form>
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

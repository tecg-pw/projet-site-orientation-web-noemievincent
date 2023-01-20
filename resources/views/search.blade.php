<x-header :head_title="'search.head_title'"/>
<main class="mt-6 flex-1 px-10">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <div class="col-span-3">
            <div class="mb-12">
                <form action="/{{app()->getLocale()}}/search" method="get" class="flex col-start-3 h-14">
                    <label for="search_term" class="h-full flex-1">
                            <span class="sr-only">
                                {{__('search.label')}}
                            </span>
                        <input placeholder="{{__('search.label')}}" type="search" id="search_term" name="search_term"
                               class="h-full w-full pl-3 py-1 border border-orange-light border-r-0 focus:outline-none rounded-l-lg placeholder:font-light transition ease-in-out duration-200">
                    </label>
                    <button
                        class="bg-orange text-white h-full px-10 rounded-r-lg uppercase hover:bg-orange-dark transition ease-in-out duration-200">
                        {{__('search.button')}}
                    </button>
                </form>
            </div>
            <section aria-labelledby="search-results" class="flex flex-col gap-8">
                @if($results)
                    <div class="flex flex-col gap-8">
                        <div class="flex flex-col gap-2">
                            <h2 id="search-results"
                                class="text-5xl font-bold uppercase tracking-wider font-display text-blue">{{$total}} {{__('search.title')}}</h2>
                            <p class="text-2xl font-semibold text-blue">&laquo; {{$search_term}} &raquo;</p>
                        </div>
                        @if(array_key_exists('projects', $results) && count($results['projects']) > 0)
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-semibold font-display">{{__('search.titles.projects')}} ({{count($results['projects'])}})</h3>
                                <div class="grid grid-cols-3 justify-items-center gap-x-11 gap-y-8">
                                    @foreach($results['projects'] as $projectRef)
                                        <x-projects.article
                                            :project="$projectRef->translations->where('locale', app()->getLocale())->first()"
                                            :student="$projectRef->student->translations->where('locale', app()->getLocale())->first()"
                                            :all-categories="$projectRef->categories"/>
                                    @endforeach
                                </div>
                                <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                                    <span>{{__('search.more_results')}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                         class="h-full rotate-90 fill-orange">
                                        <path
                                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        @endif
                        @if(array_key_exists('questions', $results) && count($results['questions']) > 0)
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-semibold font-display">{{__('search.titles.forum')}} ({{count($results['questions'])}})</h3>
                                <div class="flex flex-col gap-4">
                                    @foreach($results['questions'] as $question)
                                        <x-forum.article :question="$question"
                                                         :category="$question->category->translations->where('locale', app()->getLocale())->first()"/>
                                    @endforeach
                                </div>
                                <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                                    <span>{{__('search.more_results')}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                         class="h-full rotate-90 fill-orange">
                                        <path
                                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        @endif
                        @if(array_key_exists('tutorials', $results) && count($results['tutorials']) > 0)
                            <div class="flex flex-col gap-6">
                                <h3 class="text-2xl font-semibold font-display">{{__('search.titles.tutorials')}} ({{count($results['tutorials'])}})</h3>
                                <div class="grid grid-cols-2 gap-8">
                                    @foreach($results['tutorials'] as $tutorial)
                                        <x-resources.tutorial
                                            :tutorial="$tutorial->translations->where('locale', app()->getLocale())->first()"
                                            :languages="$tutorial->languages"
                                            is_favorite="false"/>
                                    @endforeach
                                </div>
                                <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                                    <span>{{__('search.more_results')}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                         class="h-full rotate-90 fill-orange">
                                        <path
                                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        @endif
                        @if(array_key_exists('news', $results) && count($results['news']) > 0)
                            <div class="flex flex-col gap-6">
                                <h3 class="text-2xl font-semibold font-display">{{__('search.titles.news')}} ({{count($results['news'])}})</h3>
                                <div class="grid grid-cols-3 justify-items-center gap-x-11 gap-y-8">
                                    @foreach($results['news'] as $new)
                                        <x-news.article
                                            :new="$new->translations->where('locale', app()->getLocale())->first()"
                                            :category="$new->category->translations->where('locale', app()->getLocale())->first()"
                                            :parent="'search'">
                                            <h3 id="{{$new->translations->where('locale', app()->getLocale())->first()->slug}}"
                                                class="text-white text-xl">{{$new->translations->where('locale', app()->getLocale())->first()->title}}</h3>
                                        </x-news.article>
                                    @endforeach
                                </div>
                                <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                                    <span>{{__('search.more_results')}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                         class="h-full rotate-90 fill-orange">
                                        <path
                                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        @endif
                        @if(array_key_exists('users', $results) && count($results['users']) > 0)
                            <div class="flex flex-col gap-6">
                                <h3 class="text-2xl font-semibold font-display">{{__('search.titles.users')}} ({{count($results['users'])}})</h3>
                                <div class="grid grid-cols-3 gap-8">
                                    @foreach($results['users'] as $user)
                                        <x-user :user="$user"/>
                                    @endforeach
                                </div>
                                <a href="#" class="flex items-center gap-4 text-sm uppercase text-orange">
                                    <span>{{__('search.more_results')}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                         class="h-full rotate-90 fill-orange">
                                        <path
                                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        @endif
                    </div>
                @elseif($search_term !== '')
                    <div class="flex flex-col gap-12">
                        <div class="flex flex-col gap-2">
                            <h2 id="search-results"
                                class="text-5xl font-bold uppercase tracking-wider font-display text-blue">{{__('search.no_results.title')}}</h2>
                            <p class="text-2xl font-semibold text-blue">&laquo; {{$search_term}} &raquo;</p>
                        </div>
                        <div>
                            <p class="mb-3 text-2xl">{{__('search.no_results.tagline')}}</p>
                            <ul class="ml-6 list-disc list-inside marker:text-orange text-lg leading-7">
                                @foreach(__('search.no_results.hints') as $hint)
                                    <li>{{$hint}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="flex flex-col gap-12">
                        <div class="flex flex-col gap-2">
                            <h2 id="search-results"
                                class="text-5xl font-bold uppercase tracking-wider font-display text-blue">{{__('search.no_search_term.title')}}</h2>
                        </div>
                        <p class="mb-3 text-2xl">{{__('search.no_search_term.tagline')}}</p>
                    </div>
                @endif
            </section>
        </div>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

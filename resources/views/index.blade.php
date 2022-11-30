<x-header :head_title="'home.head_title'"/>
<main class="flex-1 px-10">
    <section aria-labelledby="introduction" class="mt-10 flex gap-12">
        <div class="col-span-2 flex flex-col gap-6">
            <h2 id="introduction" class="text-7xl font-bold uppercase tracking-wider font-display text-blue">Web
                Design</h2>
            <p class="font-light leading-7">
                {{__('home.hero_description')}}
            </p>
            <div class="flex items-center gap-10 uppercase">
                <a href="/about"
                   class="rounded-lg px-12 py-3 text-white transition-all duration-200 ease-in-out bg-orange hover:bg-orange-dark">{{__('home.learn_more_button')}}</a>
                <a href="https://hepl.be/fr"
                   class="transition-all duration-200 ease-in-out text-orange hover:text-orange-dark hover:underline hover:decoration-solid hover:decoration-2 hover:underline-offset-2">{{__('home.visit_website_link')}}</a>
            </div>
        </div>
        <img src="/img/marvin-meyer-SYTO3xs06fU-unsplash.jpg" alt="" class="hidden lg:block">
    </section>
    <div class="mt-20 lg:grid grid-cols-4 justify-between gap-12">
        <div class="col-span-3">
            <section aria-labelledby="projects" class="mb-14 flex flex-col gap-6">
                <h2 id="projects"
                    class="text-4xl font-medium uppercase tracking-wider font-display text-blue">{{__('home.projects_title')}}</h2>
                <div class="grid grid-cols-3 justify-items-center gap-x-11 gap-y-8">
                    @foreach($projects as $project)
                        <x-projects.article :project="$project" :student="$project->student"/>
                    @endforeach
                </div>
                <a href="/projects"
                   class="flex items-center gap-4 self-end text-lg uppercase transition-all duration-200 ease-in-out text-orange hover:gap-6">
                    <span>{{__('home.all_projects_link')}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="h-full fill-orange">
                        <path id="projects-link"
                              d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                              transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                </a>
            </section>
            <section aria-labelledby="forum" class="flex flex-col gap-6">
                <h2 id="forum"
                    class="text-4xl font-medium uppercase tracking-wider font-display text-blue">{{__('home.forum_title')}}</h2>
                <div class="flex flex-col gap-6">
                    @for($i = 0; $i < 2; $i++)
                        <x-forum.article/>
                    @endfor
                </div>
                <a href="/forum"
                   class="flex items-center gap-4 self-end text-lg uppercase transition-all duration-200 ease-in-out text-orange hover:gap-6">
                    <span>{{__('home.all_questions_link')}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="h-full fill-orange">
                        <path id="forum-link"
                              d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                              transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                </a>
            </section>
        </div>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

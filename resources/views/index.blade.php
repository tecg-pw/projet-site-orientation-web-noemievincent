<x-header :head_title="'home.head_title'"/>
<main class="main">
    @if(session('success'))
        <div class="-mt-10 mb-8 p-3 text-center text-white bg-green-success">
            <p>{{session('success')}}</p>
        </div>
    @endif
    <section aria-labelledby="introduction" class="flex flex-col gap-6">
        <h2 id="introduction"
            class="text-5xl font-bold uppercase tracking-wider font-display text-blue sm:text-7xl">{{__('home.title')}}</h2>
        <div class="gap-8 lg:grid lg:grid-cols-2">
            <div class="flex flex-col justify-between gap-6">
                <p class="font-light leading-7">
                    {{__('home.hero_description')}}
                </p>
                <div
                    class="flex flex-col gap-4 text-center uppercase sm:flex-row sm:place-content-center sm:items-center sm:gap-12 lg:justify-start xl:gap-24">
                    <a href="/{{app()->getLocale()}}/about"
                       class="rounded-lg px-9 py-3 text-white bg-orange transitionable hover:bg-orange-dark">{{__('home.learn_more_button')}}</a>
                    <a href="https://hepl.be/fr"
                       class="text-orange transitionable hover:text-orange-dark hover:underline hover:decoration-solid hover:decoration-2 hover:underline-offset-2">{{__('home.visit_website_link')}}</a>
                </div>
            </div>
            <picture>
                <source media="(max-width: 768px)" srcset="/img/home/home-300w.jpg">
                <source media="(max-width: 1280px)" srcset="/img/home/home-1273w.jpg">
                <source media="(max-width: 1400px)" srcset="/img/home/home-1393w.jpg">
                <img src="/img/home/home-1536w.jpg"
                     alt="" class="hidden lg:block">
            </picture>
        </div>
    </section>
    <div class="mt-14 xl:grid xl:grid-cols-4 xl:gap-10">
        <div class="col-span-3 flex flex-col gap-14 lg:gap-16">
            <section aria-labelledby="projects" class="flex flex-col gap-6">
                <h2 id="projects"
                    class="text-4xl font-medium uppercase leading-snug tracking-wider font-display text-blue">{{__('home.projects_title')}}</h2>
                <div
                    class="flex flex-col justify-items-center gap-8 sm:grid sm:grid-cols-2 md:grid-cols-3">
                    @foreach($projects as $projectRef)
                        <x-projects.article
                            :project="$projectRef->translations->where('locale', app()->getLocale())->first()"
                            :student="$projectRef->student->translations->where('locale', app()->getLocale())->first()"
                            :all-categories="$projectRef->categories"/>
                    @endforeach
                </div>
                <x-link :path="'projects'" :label="'home.all_projects_link'"/>
            </section>
            <section aria-labelledby="forum" class="flex flex-col gap-6">
                <h2 id="forum"
                    class="text-4xl font-medium uppercase leading-snug tracking-wider font-display text-blue">{{__('home.forum_title')}}</h2>
                <div class="flex flex-col gap-6">
                    @foreach($questions as $question)
                        <x-forum.article :question="$question"
                                         :category="$question->category->translations->where('locale', app()->getLocale())->first()"/>
                    @endforeach
                </div>
                <x-link :path="'forum'" :label="'home.all_questions_link'"/>
            </section>
        </div>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

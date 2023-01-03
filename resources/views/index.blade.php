<x-header :head_title="'home.head_title'"/>
<main class="main">
    @if(session('success'))
        <div class="bg-green-success text-white text-center p-3 -mt-10 mb-8">
            <p>{{session('success')}}</p>
        </div>
    @endif
    <section aria-labelledby="introduction" class="flex flex-col gap-6">
        <h2 id="introduction"
            class="font-display font-bold uppercase tracking-wider text-blue text-5xl sm:text-7xl">{{__('home.title')}}</h2>
        <div class="gap-8 lg:grid lg:grid-cols-2 xl:flex">
            <div class="flex flex-col justify-between gap-6">
                <p class="font-light leading-7">
                    {{__('home.hero_description')}}
                </p>
                <div
                    class="uppercase text-center flex flex-col gap-4 sm:flex-row sm:place-content-center sm:items-center sm:gap-12 lg:justify-start xl:gap-24">
                    <a href="/{{app()->getLocale()}}/about"
                       class="text-white bg-orange hover:bg-orange-dark rounded-lg px-9 py-3 transitionable">{{__('home.learn_more_button')}}</a>
                    <a href="https://hepl.be/fr"
                       class="text-orange hover:text-orange-dark hover:underline hover:decoration-solid hover:decoration-2 hover:underline-offset-2 transitionable">{{__('home.visit_website_link')}}</a>
                </div>
            </div>
            <img src="/img/marvin-meyer-SYTO3xs06fU-unsplash.jpg" alt="" class="hidden lg:block">
        </div>
    </section>
    <div class="mt-14 xl:grid xl:grid-cols-4 xl:gap-10">
        <div class="col-span-3 flex flex-col gap-14 lg:gap-16">
            <section aria-labelledby="projects" class="flex flex-col gap-6">
                <h2 id="projects"
                    class="font-display font-medium uppercase tracking-wider leading-snug text-blue text-4xl">{{__('home.projects_title')}}</h2>
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
                    class="font-display font-medium uppercase tracking-wider leading-snug text-blue text-4xl">{{__('home.forum_title')}}</h2>
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

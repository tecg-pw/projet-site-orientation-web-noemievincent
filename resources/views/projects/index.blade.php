<x-header :head_title="'projects.head_title'" :id="'projects_page'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="projects" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="projects"
                    class="h2">{{__('projects.title')}}</h2>
                <p class="text-lg ">{{__('projects.tagline')}}</p>
            </div>
            <x-filters.container :url="$url">
                <x-filters.project-categories :categories="$categories"/>
                <x-filters.date :label="'date'" :dates="$dates" :property="'published_at'" :format="'F Y'"/>
            </x-filters.container>
            <div id="container">
                <x-projects.paginated_projects :projects="$projects"/>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

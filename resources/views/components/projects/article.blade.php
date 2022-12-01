@props(['project', 'student'])
<article aria-labelledby="{{$project->slug}}" class="relative">
    <div class="flex gap-2 absolute -top-2 left-5 z-10">
        @foreach($project->categories as $category)
            <a href="#"
               class="rounded bg-blue text-white text-sm px-3 py-1 hover:bg-orange-dark transition-all ease-in-out duration-200">{{$category->name}}</a>
        @endforeach
    </div>
    <div class="group bg-blue-card rounded-2xl relative">
        <a href="/projects/{{$student->slug}}/{{$project->slug}}"
           class="full-link">{{__('projects.see_link', ['title' => $project->title])}}</a>
        <div>
            <div
                class="relative before:overlay before:bg-blue/5 before:rounded-t-2xl before:transition before:ease-in-out before:duration-200 group-hover:before:bg-blue/30">
                <img src="https://placehold.jp/450x350.png" height="350" width="450"
                     alt="{{__('projects.see_project', ['title' => $project->title])}}"
                     class="object-cover w-full rounded-t-2xl">
            </div>
            <div class="p-4 flex flex-col gap-12">
                <h3 id="{{$project->slug}}" class="uppercase text-2xl">{{$project->title}}</h3>
                <div>
                    <p class="text-xl mb-1">{{$student->fullname}}</p>
                    <div class="flex justify-between">
                        <time datetime="{{$project->published_at->format('Y-m')}}"
                              class="font-light">{{$project->published_at->format('F Y')}}</time>
                        <a href="/projects/{{$project->slug}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24"
                                 height="24" width="12" aria-labelledby="projectTitle">
                                <title
                                    id="projectTitle">{{__('projects.see_project', ['title' => $project->title])}}</title>
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill="#89500b"
                                    fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

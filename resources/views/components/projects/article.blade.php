@props(['project', 'student', 'allCategories'])
@php
    foreach ($allCategories as $category) {
        $categories[] = $category->translations->where('locale', app()->getLocale())->first();
    }
@endphp
<article aria-labelledby="{{$project->slug}}-{{$student->slug}}" class="relative max-w-md w-full">
    <div class="flex gap-2 absolute -top-2 left-5 z-10">
        @foreach($categories as $category)
            <p class="text-white text-sm rounded bg-blue px-2 py-1 hover:bg-orange-dark transitionable">{{$category->name}}</p>
        @endforeach
    </div>
    <div class="group bg-blue-card rounded-2xl relative">
        <a href="/{{app()->getLocale()}}/projects/{{$student->slug}}/{{$project->slug}}"
           class="full-link">{{__('projects.see_link', ['title' => $project->title])}}</a>
        <div>
            <div
                class="relative before:overlay before:bg-blue/5 before:rounded-t-2xl group-hover:before:bg-blue/30 before:transitionable">
                <picture>
                    @if($project->srcset && $project->srcset['thumbnail'])
                        @foreach($project->srcset['thumbnail'] as $size => $path)
                            <source media="(max-width: {{$size}}px)"
                                    srcset="/{{$path}}">
                        @endforeach
                    @endif
                    <img
                        src="{{$project->thumbnail ? '/' . $project->thumbnail : '/img/placeholders/project-448x348.png'}}"
                        alt="{{__('projects.see_link', ['title' => $project->title, 'name' => $student->fullname])}}"
                        class="w-full object-cover rounded-t-2xl">
                </picture>
            </div>
            <div class="p-4 flex flex-col gap-4">
                <h3 id="{{$project->slug}}-{{$student->slug}}" class="uppercase text-2xl">{{$project->title}}</h3>
                <div>
                    <p class="text-xl">{{$student->fullname}}</p>
                    <div class="flex justify-between">
                        <time datetime="{{$project->published_at->translatedFormat('Y-m')}}"
                              class="font-light">{{ucfirst($project->published_at->translatedFormat('F Y'))}}</time>
                        <a href="/projects/{{$project->slug}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24"
                                 height="22" width="10" aria-labelledby="{{$project->slug}}-{{$student->slug}}-svg">
                                <title
                                    id="{{$project->slug}}-{{$student->slug}}-svg">{{__('projects.see_project', ['title' => $project->title])}}</title>
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

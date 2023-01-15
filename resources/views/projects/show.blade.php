<x-header :head_title="$project->title"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$project->slug}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/projects"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('projects.single.back_to_projects_link')}}</span>
                </a>
                <h2 id="{{$project->slug}}"
                    class="single-h2">{{$project->title}}</h2>
            </div>
            <div class="flex flex-col-reverse justify-between gap-12 lg:gap-28 md:flex-row">
                <div class="flex flex-col gap-6">
                    <div class="flex gap-3 md:flex-col">
                        <img src="https://placehold.jp/200x200.png" alt="{{$student->fullname}}"
                             class="rounded-full" height="200" width="200">
                        <div>
                            <a href="/{{app()->getLocale()}}/alumnis/{{$student->slug}}"
                               class="text-xl font-semibold hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">{{$student->fullname}}</a>
                            <p>
                                {{trans_choice('roles.' . $student->role, $student->gender)}}
                                {{$student->start_year->format('Y')}}
                                {{$student->end_year != null ? ' - ' . $student->end_year->translatedFormat('Y') : ''}}</p>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li><x-socials.github :link="$student->github_link" :id="$student->slug" :name="$student->fullname"/></li>
                        <li><x-socials.linkedin :link="$student->linkedin_link" :id="$student->slug" :name="$student->fullname"/></li>
                        @if($student->instagram_link)
                            <li><x-socials.instagram :link="$student->instagram_link" :id="$student->slug" :name="$student->fullname"/></li>
                        @endif
                    </ul>
                    <div class="bg-blue/50 w-full h-px"></div>
                    <div>
                        <ul class="flex flex-col gap-2">
                            @if($project->github_link)
                                <li><a href="{{$project->github_link}}"
                                       class="flex items-center justify-between self-end uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                                        <span>{{__('projects.single.github_link')}}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12"
                                             width="6"
                                             class="fill-orange h-full">
                                            <path
                                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                        </svg>
                                    </a></li>
                            @endif
                            @if($project->website_link)
                                <li><a href="{{$project->website_link}}"
                                       class="flex items-center justify-between self-end uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                                        <span>{{__('projects.single.website_link')}}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12"
                                             width="6"
                                             class="fill-orange h-full">
                                            <path
                                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                        </svg>
                                    </a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="h-full w-full flex flex-col gap-10">
                    <div class="flex justify-between lg:items-center">
                        <div class="flex flex-col gap-1 lg:gap-3 lg:flex-row">
                            <ul class="flex gap-2">
                                @foreach($categories as $category)
                                    <li class="after:content-['-'] flex gap-2 last:after:content-none">{{$category->name}}</li>
                                @endforeach
                            </ul>
                            <div class="bg-blue/50 h-max-content w-px"></div>
                            <time
                                datetime="{{$project->published_at->format('Y-m')}}">{{ucfirst($project->published_at->translatedFormat('F Y'))}}</time>
                            <div class="bg-blue/50 h-max-content w-px"></div>
                            <a href="/{{app()->getLocale()}}/classes/{{$course->slug}}">{{$course->name}}</a>
                        </div>
                        <x-share/>
                    </div>
                    <div class="flex gap-2">
                        <p>{{__('projects.single.alternative')}}</p>
                        <ul class="flex gap-2">
                            @foreach($alternatives as $key => $alt)
                                <li>
                                    <a class="hover:underline underline-offset-2 decoration-1 decoration-solid text-orange"
                                       href="/{{$alt->locale}}/projects/{{$student->slug}}/{{$alt->slug}}">{{__('locales.' . $alt->locale)}}</a>{{$key == count($alternatives)-1 ? '' : ', '}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        {!! $project->body !!}
                    </div>
                    {{--                    <div class="flex flex-wrap gap-8">--}}
                    {{--                        <img src="https://placehold.jp/320x374.png" alt="">--}}
                    {{--                        <img src="https://placehold.jp/320x374.png" alt="">--}}
                    {{--                        <img src="https://placehold.jp/672x374.png" alt="">--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <h2 class="font-display font-semibold text-blue text-xl tracking-wider">{{__('projects.single.others_projects_from', ['name' => $student->firstname])}}</h2>
                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col gap-6 justify-items-center sm:grid sm:grid-cols-2 sm:gap-x-11 sm:gap-y-8 lg:grid-cols-3">
                        @foreach($otherProjects as $otherProject)
                            @if($otherProject->translations->where('locale', app()->getLocale())->first()->project_id != $project->project_id)
                                <x-projects.article
                                    :project="$otherProject->translations->where('locale', app()->getLocale())->first()"
                                    :student="$student"
                                    :all-categories="$otherProject->categories"/>
                            @endif
                        @endforeach
                    </div>
                    <a href="/{{app()->getLocale()}}/projects"
                       class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                        <span>{{trans_choice('projects.single.all_projects_from_link', $student->gender)}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                             class="fill-orange h-full">
                            <path
                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

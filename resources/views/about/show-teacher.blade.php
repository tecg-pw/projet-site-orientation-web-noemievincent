<x-header :head_title="$teacher->fullname"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$teacher->fullname}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/about#teachers"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transitionable">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('teachers.single.back_to_teachers_link')}}</span>
                </a>
                <div class="flex flex-col gap-3 justify-between lg:flex-row">
                    <div class="flex gap-6">
                        <img src="{{$teacher->pictures && $teacher->pictures['full'] ? '/' . $teacher->pictures['full'] : '/img/placeholders/person-180x180.png'}}"
                             alt="{{$teacher->fullname}}" class="hidden rounded-full lg:block">
                        <div class="flex flex-col gap-3">
                            <h2 id="{{$teacher->fullname}}"
                                class="single-h2">{{$teacher->fullname}}</h2>
                            <div class="text-lg">
                                <p>{{trans_choice('roles.' . $teacher->role, $teacher->genre)}}</p>
                                <a href="mailto:{{$teacher->email}}">{{$teacher->email}}</a>
                            </div>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li><a href="{{$teacher->github_link}}">
                                <svg version="1.1" id="github" xmlns="http://www.w3.org/2000/svg"
                                     x="0px" y="0px" height="36"
                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                     aria-labelledby="githubTitle"
                                     xml:space="preserve">
                                            <title
                                                id="githubTitle">{{__('alumnis.single.github_link', ['name' => $teacher->fullname])}}</title>
                                    <style type="text/css">
                                        .github_gray {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #1B1F23;
                                        }
                                    </style>
                                    <path class="github_gray" d="M10,0C4.5,0,0,4.5,0,10c0,4.4,2.9,8.2,6.8,9.5c0.5,0.1,0.7-0.2,0.7-0.5c0-0.2,0-1,0-1.9C5,17.6,4.3,16.5,4.2,16
                                            c-0.1-0.3-0.6-1.2-1-1.4c-0.3-0.2-0.8-0.6,0-0.7c0.8,0,1.4,0.7,1.5,1C5.6,16.4,7,16,7.6,15.8c0.1-0.6,0.3-1.1,0.6-1.3
                                            C6,14.2,3.7,13.3,3.7,9.5c0-1.1,0.4-2,1-2.7C4.6,6.5,4.2,5.5,4.8,4.1c0,0,0.8-0.3,2.8,1C8.3,4.9,9.2,4.8,10,4.8
                                            c0.8,0,1.7,0.1,2.5,0.3c1.9-1.3,2.8-1,2.8-1c0.5,1.4,0.2,2.4,0.1,2.7c0.6,0.7,1,1.6,1,2.7c0,3.8-2.3,4.7-4.6,4.9
                                            c0.4,0.3,0.7,0.9,0.7,1.9c0,1.3,0,2.4,0,2.8c0,0.3,0.2,0.6,0.7,0.5c4-1.3,6.8-5.1,6.8-9.5C20,4.5,15.5,0,10,0z"/>
                                        </svg>
                            </a></li>
                        <li><a href="{{$teacher->linkedin_link}}">
                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                     x="0px" y="0px" height="36"
                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                     aria-labelledby="linkedinTitle"
                                     xml:space="preserve">
                                            <title
                                                id="linkedinTitle">{{__('alumnis.single.linkedin_link', ['name' => $teacher->fullname])}}</title>
                                    <style type="text/css">
                                        .linkedin-blue {
                                            fill: #006699;
                                        }

                                        .linkedin-white {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #FFFFFF;
                                        }
                                    </style>
                                    <g>
                                        <path class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
                                        <path class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
                                        <path class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
                                    </g>
                                        </svg>
                            </a></li>
                    </ul>
                </div>
                <div>
                    {!! $teacher->bio !!}
                </div>
            </div>
            <section aria-labelledby="classes">
                <h3 id="classes"
                    class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{__('teachers.single.classes_title')}}</h3>
                <div class="flex flex-col gap-6 sm:grid sm:grid-cols-2 sm:gap-4">
                    @foreach($courses as $course)
                        <x-about.class :course="$course->translations->where('locale', app()->getLocale())->first()"/>
                    @endforeach
                </div>
            </section>
            @if(isset($projects))
                <section aria-labelledby="projects" class="flex flex-col gap-5">
                    <h2 id="projects"
                        class="font-display font-semibold text-blue text-xl tracking-wider">{{__('alumnis.single.projects_from', ['name' => $teacher->firstname])}}</h2>
                    <div class="flex flex-col gap-2">
                        <div
                            class="flex flex-col gap-10 justify-items-center sm:grid sm:grid-cols-2 sm:gap-x-11 sm:gap-y-8 lg:grid-cols-3">
                            @foreach($projects as $project)
                                <x-projects.article
                                    :project="$project->translations->where('locale', app()->getLocale())->first()"
                                    :student="$teacher" :all-categories="$project->categories"/>
                            @endforeach
                        </div>
                        <a href="/{{app()->getLocale()}}/projects"
                           class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transitionable">
                            <span>{{trans_choice('alumnis.single.all_projects_from_link', $teacher->genre)}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                                 class="fill-orange h-full">
                                <path
                                    d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                    transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </section>
            @endif
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

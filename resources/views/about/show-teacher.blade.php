<x-header :head_title="$teacher->fullname"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$teacher->slug}}" class="col-span-3 flex flex-col gap-8">
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
                        <picture>
                            @if($teacher->srcset && $teacher->srcset['full'])
                                @foreach($teacher->srcset['full'] as $size => $path)
                                    <source media="(max-width: {{$size}}px)"
                                            srcset="/{{$path}}">
                                @endforeach
                            @endif
                            <img
                                src="{{$teacher->pictures && $teacher->pictures['full'] ? '/' . $teacher->pictures['full'] : '/img/placeholders/person-180x180.png'}}"
                                alt="{{$teacher->fullname}}" class="hidden rounded-full lg:block">
                        </picture>
                        <div class="flex flex-col gap-3">
                            <h2 id="{{$teacher->slug}}"
                                class="single-h2">{{$teacher->fullname}}</h2>
                            <div class="text-lg">
                                <p>{{trans_choice('roles.' . $teacher->role, $teacher->gender)}}</p>
                                <a href="mailto:{{$teacher->email}}">{{$teacher->email}}</a>
                            </div>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        @if($teacher->github_link)
                            <li><x-socials.github :link="$teacher->github_link" :id="$teacher->slug" :name="$teacher->fullname"/></li>
                        @endif
                        @if($teacher->linkedin_link)
                            <li><x-socials.linkedin :link="$teacher->linkedin_link" :id="$teacher->slug" :name="$teacher->fullname"/></li>
                        @endif
                    </ul>
                </div>
                <div class="wysiwyg">
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
                            <span>{{trans_choice('alumnis.single.all_projects_from_link', $teacher->gender)}}</span>
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

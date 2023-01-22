<x-header :head_title="$alumni->fullname"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$alumni->slug}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/alumnis"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transitionable">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('alumnis.single.back_to_students_link')}}</span>
                </a>
                <div class="flex flex-col gap-3 justify-between lg:flex-row">
                    <div class="flex gap-6 flex-col sm:flex-row">
                        <picture>
                            @if($alumni->srcset && $alumni->srcset['full'])
                                @foreach($alumni->srcset['full'] as $size => $path)
                                    <source media="(max-width: {{$size}}px)"
                                            srcset="/{{$path}}">
                                @endforeach
                            @endif
                            <img
                                src="{{$alumni->pictures && $alumni->pictures['full'] ? '/' . $alumni->pictures['full'] : '/img/placeholders/person-180x180.png'}}"
                                alt="{{$alumni->fullname}}" class="rounded-full lg:block">
                        </picture>
                        <div class="flex flex-col gap-3">
                            <h2 id="{{$alumni->slug}}"
                                class="single-h2">{{$alumni->fullname}}</h2>
                            <div class="text-lg">
                                <p>
                                    {{trans_choice('roles.' . $alumni->role, $alumni->gender)}}
                                    {{$alumni->start_year->format('Y')}}
                                    {{$alumni->end_year != null ? ' - ' . $alumni->end_year->format('Y') : ''}}</p>
                                <div class="flex flex-col lg:flex-row lg:gap-3">
                                    <a href="mailto:{{$alumni->email}}"
                                       class="hover:text-orange hover:underline hover:underline-offset-2 transition ease-in-out duration-200">{{$alumni->email}}</a>
                                    <div class="bg-blue/50 h-max-content w-px"></div>
                                    <a href="{{$alumni->website_link}}"
                                       class="hover:text-orange hover:underline hover:underline-offset-2 transition ease-in-out duration-200">{{preg_replace('(https://|http://)', '',$alumni->website_link)}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li><x-socials.github :link="$alumni->github_link" :id="$alumni->slug" :name="$alumni->fullname"/></li>
                        <li><x-socials.linkedin :link="$alumni->linkedin_link" :id="$alumni->slug" :name="$alumni->fullname"/></li>
                        @if($alumni->instagram_link)
                            <li><x-socials.instagram :link="$alumni->instagram_link" :id="$alumni->slug" :name="$alumni->fullname"/></li>
                        @endif
                    </ul>
                </div>
                <div class="wysiwyg">
                    {!! $alumni->bio !!}
                </div>
            </div>




            <div class="flex flex-col gap-3 lg:grid lg:grid-cols-3 lg:gap-11">
                @if(isset($internship))
                    <section aria-labelledby="internship" class="col-span-1">
                        <h3 id="internship"
                            class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{trans_choice('alumnis.single.internship_title', $alumni->gender)}}</h3>
                        <x-partners.article
                            :partner="$internship->translations->where('locale', app()->getLocale())->first()"/>
                    </section>
                @endif
                @if(isset($opportunity))
                    <section aria-labelledby="job" class="col-span-2">
                        <h3 id="job"
                            class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{__('alumnis.single.job_title')}}</h3>
                        <x-about.opportunity
                            :company="isset($company) ? $company->translations->where('locale', app()->getLocale())->first() : null"
                            :opportunity="$opportunity->translations->where('locale', app()->getLocale())->first()"/>
                    </section>
                @endif
            </div>
            <section aria-labelledby="projects" class="flex flex-col gap-5">
                <h2 id="projects"
                    class="font-display font-semibold text-blue text-xl tracking-wider">{{__('alumnis.single.projects_from', ['name' => $alumni->firstname])}}</h2>
                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col gap-10 justify-items-center sm:grid sm:grid-cols-2 sm:gap-x-11 sm:gap-y-8 lg:grid-cols-3">
                        @foreach($projects as $project)
                            <x-projects.article
                                :project="$project->translations->where('locale', app()->getLocale())->first()"
                                :student="$alumni"
                                :all-categories="$project->categories"/>
                        @endforeach
                    </div>
                    <a href="/{{app()->getLocale()}}/projects"
                       class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transitionable">
                        <span>{{trans_choice('alumnis.single.all_projects_from_link', $alumni->gender)}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                             class="fill-orange h-full">
                            <path
                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </section>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

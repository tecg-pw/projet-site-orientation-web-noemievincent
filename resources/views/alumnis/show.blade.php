<x-header :head_title="$alumni->fullname"/>
<main class="px-10 flex-1 mt-6">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$alumni->slug}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/alumnis"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('alumnis.single.back_to_students_link')}}</span>
                </a>
                <div class="flex justify-between">
                    <div class="flex gap-6">
                        <img src="https://placehold.jp/120x120.png" alt="{{$alumni->fullname}}" height="120"
                             width="120"
                             class="rounded-full">
                        <div class="flex flex-col gap-3">
                            <h2 id="{{$alumni->slug}}"
                                class="font-display font-bold text-blue text-4xl tracking-wider uppercase">{{$alumni->fullname}}</h2>
                            <div class="text-lg">
                                <p>@if($alumni->role == 'student')
                                        {{__('roles.student')}}
                                    @elseif($alumni->role == 'student_teacher')
                                        {{__('roles.student_teacher')}}
                                    @endif
                                    {{$alumni->start_year->format('Y')}}
                                    {{$alumni->end_year != null ? ' - ' . $alumni->end_year->format('Y') : ''}}</p>
                                <div class="flex gap-3">
                                    <a href="mailto:{{$alumni->email}}"
                                       class="hover:text-orange hover:underline hover:underline-offset-2 transition ease-in-out duration-200">{{$alumni->email}}</a>
                                    <div class="bg-blue/50 h-max-content w-px"></div>
                                    <a href="{{$alumni->website_link}}"
                                       class="hover:text-orange hover:underline hover:underline-offset-2 transition ease-in-out duration-200">{{$alumni->website_link}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li><a href="{{$alumni->github_link}}">
                                <svg version="1.1" id="github" xmlns="http://www.w3.org/2000/svg"
                                     x="0px" y="0px" height="36"
                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                     aria-labelledby="githubTitle"
                                     xml:space="preserve">
                                            <title
                                                id="githubTitle">{{__('alumnis.single.github_link', ['name' => $alumni->fullname])}}</title>
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
                        <li><a href="{{$alumni->linkedin_link}}">
                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                                     x="0px" y="0px" height="36"
                                     viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
                                     aria-labelledby="linkedinTitle"
                                     xml:space="preserve">
                                            <title
                                                id="linkedinTitle">{{__('alumnis.single.linkedin_link', ['name' => $alumni->fullname])}}</title>
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
                        @if($alumni->instagram_link)
                            <li><a href="{{$alumni->instagram_link}}">
                                    <svg version="1.1" id="instagram" xmlns="http://www.w3.org/2000/svg"
                                         x="0px" y="0px" height="36"
                                         viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;"
                                         xml:space="preserve" aria-labelledby="instagramTitle">
                                        <title
                                            id="instagramTitle">{{__('alumnis.single.instagram_link', ['name' => $alumni->fullname])}}</title>
                                        <style type="text/css">
                                            .insta_gradient {
                                                fill: url(#SVGID_1_);
                                            }

                                            .insta_white {
                                                fill: #FFFFFF;
                                            }
                                        </style>
                                        <g>
                                            <radialGradient id="SVGID_1_" cx="-603.0173" cy="811.7922" r="9.9923"
                                                            gradientTransform="matrix(0 -1.982 1.8439 0 -1491.5541 -1173.6573)"
                                                            gradientUnits="userSpaceOnUse">
                                                <stop offset="0" style="stop-color:#FFDD55"/>
                                                <stop offset="0.1" style="stop-color:#FFDD55"/>
                                                <stop offset="0.5" style="stop-color:#FF543E"/>
                                                <stop offset="1" style="stop-color:#C837AB"/>
                                            </radialGradient>
                                            <path class="insta_gradient" d="M10,0C5.8,0,4.6,0,4.4,0C3.5,0.1,3,0.2,2.4,0.5C2,0.7,1.6,1,1.2,1.4C0.6,2,0.2,2.8,0.1,3.8C0,4.3,0,4.4,0,6.7
            C0,7.5,0,8.6,0,10c0,4.2,0,5.4,0,5.6c0.1,0.8,0.2,1.4,0.5,1.9C1,18.6,2,19.5,3.2,19.8C3.7,19.9,4.1,20,4.7,20c0.2,0,2.8,0,5.3,0
            s5,0,5.3,0c0.7,0,1.1-0.1,1.5-0.2c1.2-0.3,2.2-1.1,2.7-2.2c0.3-0.6,0.4-1.1,0.5-1.9c0-0.2,0-2.9,0-5.7s0-5.5,0-5.7
            c-0.1-0.8-0.2-1.3-0.5-1.9C19.3,2,19,1.6,18.6,1.3c-0.7-0.6-1.5-1-2.4-1.2C15.8,0,15.7,0,13.3,0L10,0L10,0z"/>
                                            <radialGradient
                                                id="SVGID_00000029040846286603395010000013500758515109746617_"
                                                cx="568.2048" cy="381.2207" r="9.9923"
                                                gradientTransform="matrix(0.1739 0.8687 -3.5818 0.7172 1263.2953 -765.5728)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" style="stop-color:#3771C8"/>
                                                <stop offset="0.128" style="stop-color:#3771C8"/>
                                                <stop offset="1" style="stop-color:#6600FF;stop-opacity:0"/>
                                            </radialGradient>
                                            <path
                                                style="fill:url(#SVGID_00000029040846286603395010000013500758515109746617_);"
                                                d="M10,0C5.8,0,4.6,0,4.4,0
            C3.5,0.1,3,0.2,2.4,0.5C2,0.7,1.6,1,1.2,1.4C0.6,2,0.2,2.8,0.1,3.8C0,4.3,0,4.4,0,6.7C0,7.5,0,8.6,0,10c0,4.2,0,5.4,0,5.6
            c0.1,0.8,0.2,1.4,0.5,1.9C1,18.6,2,19.5,3.2,19.8C3.7,19.9,4.1,20,4.7,20c0.2,0,2.8,0,5.3,0s5,0,5.3,0c0.7,0,1.1-0.1,1.5-0.2
            c1.2-0.3,2.2-1.1,2.7-2.2c0.3-0.6,0.4-1.1,0.5-1.9c0-0.2,0-2.9,0-5.7s0-5.5,0-5.7c-0.1-0.8-0.2-1.3-0.5-1.9C19.3,2,19,1.6,18.6,1.3
            c-0.7-0.6-1.5-1-2.4-1.2C15.8,0,15.7,0,13.3,0L10,0L10,0z"/>
                                            <path class="insta_white" d="M10,2.6c-2,0-2.3,0-3,0S5.6,2.8,5.1,3C4.7,3.2,4.3,3.4,3.8,3.8C3.4,4.3,3.2,4.7,3,5.1c-0.2,0.5-0.3,1-0.3,1.8
            c0,0.8,0,1,0,3s0,2.3,0,3c0,0.8,0.2,1.3,0.3,1.8c0.2,0.5,0.4,0.9,0.8,1.3c0.4,0.4,0.8,0.7,1.3,0.8c0.5,0.2,1,0.3,1.8,0.3
            c0.8,0,1,0,3,0s2.3,0,3,0c0.8,0,1.3-0.2,1.8-0.3c0.5-0.2,0.9-0.4,1.3-0.8c0.4-0.4,0.7-0.8,0.8-1.3c0.2-0.5,0.3-1,0.3-1.8
            c0-0.8,0-1,0-3s0-2.3,0-3c0-0.8-0.2-1.3-0.3-1.8c-0.2-0.5-0.4-0.9-0.8-1.3c-0.4-0.4-0.8-0.7-1.3-0.8c-0.5-0.2-1-0.3-1.8-0.3
            C12.3,2.6,12,2.6,10,2.6L10,2.6z M9.3,3.9c0.2,0,0.4,0,0.7,0c2,0,2.2,0,3,0c0.7,0,1.1,0.2,1.4,0.3c0.3,0.1,0.6,0.3,0.8,0.6
            c0.3,0.3,0.4,0.5,0.6,0.8C15.8,5.9,16,6.3,16,7c0,0.8,0,1,0,3s0,2.2,0,3c0,0.7-0.2,1.1-0.3,1.4c-0.1,0.3-0.3,0.6-0.6,0.8
            c-0.3,0.3-0.5,0.4-0.8,0.6C14.1,15.8,13.7,16,13,16c-0.8,0-1,0-3,0s-2.2,0-3,0c-0.7,0-1.1-0.2-1.4-0.3c-0.3-0.1-0.6-0.3-0.8-0.6
            c-0.3-0.3-0.4-0.5-0.6-0.8C4.1,14.1,4,13.7,4,13c0-0.8,0-1,0-3s0-2.2,0-3c0-0.7,0.2-1.1,0.3-1.4c0.1-0.3,0.3-0.6,0.6-0.8
            c0.3-0.3,0.5-0.4,0.8-0.6C5.9,4.1,6.3,4,7,4C7.7,4,8,3.9,9.3,3.9L9.3,3.9z M13.9,5.2c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9
            c0.5,0,0.9-0.4,0.9-0.9S14.4,5.2,13.9,5.2L13.9,5.2z M10,6.2c-2.1,0-3.8,1.7-3.8,3.8s1.7,3.8,3.8,3.8c2.1,0,3.8-1.7,3.8-3.8
            S12.1,6.2,10,6.2L10,6.2z M10,7.5c1.4,0,2.5,1.1,2.5,2.5s-1.1,2.5-2.5,2.5S7.5,11.3,7.5,10S8.6,7.5,10,7.5z"/>
                                        </g>
                            </svg>
                                </a></li>
                        @endif
                    </ul>
                </div>
                <div>
                    <p>{{__('Amet non laboris commodo sint occaecat. Occaecat cupidatat labore tempor ea veniam nulla ipsum. Aliquip cillum est minim nulla est. Ipsum in occaecat consectetur aute qui tempor duis minim fugiat. Voluptate magna ad commodo non adipisicing reprehenderit nostrud id voluptate minim eu mollit enim dolore commodo. Consequat labore ullamco elit excepteur in duis quis proident do enim incididunt occaecat est est commodo.')}}</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-11">
                @if(isset($alumni->internship))
                    <section aria-labelledby="internship" class="col-span-1">
                        <h3 id="internship"
                            class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{__('alumnis.single.internship_title')}}</h3>
                        <x-partners.article :partner="$alumni->internship"/>
                    </section>
                @endif
                @if(isset($alumni->opportunity))
                    <section aria-labelledby="job" class="col-span-2">
                        <h3 id="job"
                            class="font-display font-semibold text-blue text-xl tracking-wider mb-2">{{__('alumnis.single.job_title')}}</h3>
                        <x-about.opportunity :company="isset($alumni->company) ? $alumni->company : null"
                                             :opportunity="$alumni->opportunity"/>
                    </section>
                @endif
            </div>
            <section aria-labelledby="projects" class="flex flex-col gap-5">
                <h2 id="projects"
                    class="font-display font-semibold text-blue text-xl tracking-wider">{{__('alumnis.single.projects_from', ['name' => $alumni->firstname])}}</h2>
                <div class="flex flex-col gap-2">
                    <div class="grid grid-cols-3 gap-x-11 gap-y-8 justify-items-center">
                        @foreach($alumni->projects as $index => $project)
                            @if($index < 3)
                                <x-projects.article :project="$project" :student="$alumni"/>
                            @endif
                        @endforeach
                    </div>
                    <a href="/{{app()->getLocale()}}/projects"
                       class="flex items-center self-end gap-4 uppercase text-orange text-sm mt-1 hover:gap-6 transition-all ease-in-out duration-200">
                        <span>{{__('alumnis.single.all_projects_from_link')}}</span>
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

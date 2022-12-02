@props(['alumni'])
<div
    class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 p-5">
    <div class="flex justify-between">
        <div class="flex flex-col gap-4">
            <img src="https://placehold.jp/160x160.png" alt="{{$alumni->fullname}}" height="160"
                 width="160"
                 class="rounded-full">
            <div>
                <h3 class="font-semibold text-xl hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">
                    <a href="/{{app()->getLocale()}}/alumnis/{{$alumni->slug}}">{{$alumni->fullname}}</a></h3>
                <span class="flex gap-1">
                    <time
                        datetime="{{$alumni->start_year->format('Y-m')}}">{{$alumni->start_year->format('Y')}}</time> -
                    @if($alumni->end_year != null)
                        <time datetime="{{$alumni->end_year->format('Y-m')}}">{{$alumni->end_year->format('Y')}}</time>
                    @else
                        <p>{{__('alumnis.end_year')}}</p>
                    @endif
                </span>
            </div>
        </div>
        <ul class="self-start flex flex-col gap-4">
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
</div>

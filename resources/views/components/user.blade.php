@props(['user'])
<div
    class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 p-5">
    <div class="flex justify-between">
        <div class="flex flex-col gap-4">
            <img src="https://placehold.jp/160x160.png" alt="nom" height="160" width="160" class="rounded-full">
            <h3 class="cursor-pointer font-semibold text-xl hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">{{$user->fullname}}</h3>
        </div>
        <ul class="flex flex-col gap-4">
            <li><a href="{{$user->github_link}}">
                    <svg version="1.1" id="github" xmlns="http://www.w3.org/2000/svg"
                         x="0px" y="0px" height="36" viewBox="0 0 20 19.5"
                         aria-labelledby="githubTitle" xml:space="preserve">
                        <title
                            id="githubTitle">{{__('Se rendre sur le github de :name', ['name' => $user->fullname])}}</title>
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
            <li><a href="{{$user->linkedin_link}}">
                    <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg"
                         x="0px" y="0px" height="36" viewBox="0 0 20 19.5"
                         aria-labelledby="linkedinTitle" xml:space="preserve">
                        <title
                            id="linkedinTitle">{{__('Se rendre sur le linkedin de :name', ['name' => $user->fullname])}}</title>
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
</div>

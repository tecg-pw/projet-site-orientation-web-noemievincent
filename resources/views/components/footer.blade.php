<footer class="bg-blue-light px-4 py-8 text-sm mt-20 lg:px-10">
    <section aria-labelledby="footer">
        <h2 id="footer" class="sr-only">{{__('footer.title')}}</h2>
        <div class="flex flex-col gap-6 justify-between lg:my-6 lg:flex-row">
            <nav class="sr-only lg:not-sr-only">
                <h3 class="text-blue font-bold text-lg mb-4">{{__('footer.nav_title')}}</h3>
                <ul class="flex flex-col gap-2">
                    @foreach(__('header.main_nav_items') as $slug => $name)
                        <li><a href="/{{app()->getLocale()}}/{{$slug}}"
                               class="hover:text-orange transition-all ease-in-out duration-200">{{$name}}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div>
                <h3 class="text-blue font-bold text-lg mb-2 lg:mb-4">{{__('footer.socials_title')}}</h3>
                <ul class="flex flex-col gap-3">
                    <li>
                        <a href="#"
                           class="flex items-center gap-2 hover:text-orange transition-all ease-in-out duration-200">
                            <svg version="1.1" id="footer-facebook" xmlns="http://www.w3.org/2000/svg"
                                 x="0px" y="0px" width="20"
                                 viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                <style type="text/css">
                                    .fb_blue {
                                        fill: #157DC3;
                                    }

                                    .fb_white {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <g>
                                    <path class="fb_blue" d="M18.9,20c0.6,0,1.1-0.5,1.1-1.1V1.1C20,0.5,19.5,0,18.9,0H1.1C0.5,0,0,0.5,0,1.1v17.8
            C0,19.5,0.5,20,1.1,20H18.9L18.9,20z"/>
                                    <path id="f" class="fb_white" d="M13.8,20v-7.7h2.6l0.4-3h-3V7.3c0-0.9,0.2-1.5,1.5-1.5h1.6V3.1c-0.3,0-1.2-0.1-2.3-0.1
            c-2.3,0-3.9,1.4-3.9,4v2.2H8.1v3h2.6V20H13.8z"/>
                                </g>
                            </svg>
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center gap-2 hover:text-orange transition-all ease-in-out duration-200">
                            <svg version="1.1" id="footer-instagram" xmlns="http://www.w3.org/2000/svg"
                                 x="0px" y="0px" width="20"
                                 viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                <style type="text/css">
                                    .insta_gradient {
                                        fill: url(#SVGID_1_footer);
                                    }

                                    .insta_white {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <g>
                                    <radialGradient id="SVGID_1_footer" cx="-603.0173" cy="811.7922" r="9.9923"
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
                                    <radialGradient id="SVGID_00000029040846286603395010000013500758515109746617_footer"
                                                    cx="568.2048" cy="381.2207" r="9.9923"
                                                    gradientTransform="matrix(0.1739 0.8687 -3.5818 0.7172 1263.2953 -765.5728)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#3771C8"/>
                                        <stop offset="0.128" style="stop-color:#3771C8"/>
                                        <stop offset="1" style="stop-color:#6600FF;stop-opacity:0"/>
                                    </radialGradient>
                                    <path
                                        style="fill:url(#SVGID_00000029040846286603395010000013500758515109746617_footer);"
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
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center gap-2 hover:text-orange transition-all ease-in-out duration-200">
                            <svg version="1.1" id="footer-twitter" xmlns="http://www.w3.org/2000/svg"
                                 x="0px" y="0px" width="20"
                                 viewBox="0 0 20 16.3" style="enable-background:new 0 0 20 16.3;" xml:space="preserve">
                                <style type="text/css">
                                    .twitter_blue {
                                        fill: #1D9BF0;
                                    }
                                </style>
                                <path class="twitter_blue" d="M18,4c0,0.2,0,0.4,0,0.5c0,5.4-4.1,11.7-11.7,11.7v0c-2.2,0-4.4-0.6-6.3-1.8c0.3,0,0.7,0.1,1,0.1
        c1.8,0,3.6-0.6,5.1-1.8c-1.8,0-3.3-1.2-3.8-2.8C2.9,10,3.5,10,4.1,9.8c-1.9-0.4-3.3-2.1-3.3-4V5.7C1.4,6,2,6.2,2.7,6.2
        C0.9,5,0.3,2.6,1.4,0.7C3.5,3.3,6.5,4.9,9.8,5C9.5,3.6,10,2.1,11,1.1c1.7-1.6,4.3-1.5,5.8,0.2c0.9-0.2,1.8-0.5,2.6-1
        c-0.3,0.9-0.9,1.8-1.8,2.3c0.8-0.1,1.6-0.3,2.4-0.6C19.4,2.7,18.8,3.5,18,4L18,4z"/>
                            </svg>
                            Twitter
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center gap-2 hover:text-orange transition-all ease-in-out duration-200">
                            <svg version="1.1" id="footer-github" xmlns="http://www.w3.org/2000/svg"
                                 x="0px" y="0px" width="20"
                                 viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;" xml:space="preserve">
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
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-blue font-bold text-lg mb-2 lg:mb-4">{{__('footer.contact_title')}}</h3>
                <div class="flex flex-col gap-3" itemscope itemtype="https://schema.org/School">
                    <p itemprop="legalName">HEPL - Haute École de la Province de Liège</p>
                    <div itemscope itemtype="https://schema.org/PostalAddress" itemprop="address">
                        <p itemprop="streetAddress">{{__('footer.contact_street_address')}}</p>
                        <p>
                            <span itemprop="postalCode">4101</span>
                            <span itemprop="addressRegion">Seraing</span>,
                            <span itemprop="addressLocality">{{__('footer.contact_address__locality')}}</span>
                        </p>
                    </div>
                    <a href="mailto:hepl@provincedeliege.be" itemprop="email">hepl@provincedeliege.be</a>
                    <p itemprop="telephone">+32 (0)4 279 55 20</p>
                </div>
            </div>
            <div>
                <h3 class="text-blue font-bold text-lg mb-2 lg:mb-4">{{__('footer.newsletter_title')}}</h3>
                <div>
                    <p class="font-light">{{__('footer.newsletter_tagline')}}</p>
                    <form action="#" method="post"
                          class="grid grid-cols-3 h-11 mt-4 rounded-lg focus-within:outline focus-within:outline-1 focus-within:outline-orange">
                        @csrf
                        <label for="newsletter" class="h-full flex-1 col-span-full row-span-full">
                            <span class="sr-only">
                                {{__('footer.newsletter_label')}}
                            </span>
                            <input placeholder="name@example.com" type="email" id="newsletter"
                                   class="h-full w-full pl-3 border border-orange-light focus:outline-none rounded-lg placeholder:font-light transition ease-in-out duration-200">
                        </label>
                        <button
                            class="row-span-full col-start-3 bg-orange text-white h-full px-6 rounded-r-lg hover:bg-orange-dark transition ease-in-out duration-200 text-sm lg:text-base">{{__('footer.newsletter_button')}}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-1 lg:flex-row lg:justify-between text-sm mt-8">
            <p>{{__('footer.copyright')}}</p>
            <a href="/{{app()->getLocale()}}/terms"
               class="text-orange-dark hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">{{__('footer.legal_terms')}}</a>
        </div>
    </section>
</footer>

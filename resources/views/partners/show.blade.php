<x-header :head_title="$company->name"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$company->slug}}" class="col-span-3 flex flex-col gap-8" itemscope
                 itemtype="https://schema.org/Corporation">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/jobs/partners"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('jobs.partners.single.back_to_partners_link')}}</span>
                </a>
                <div class="flex flex-col gap-6 sm:flex-row">
                    <picture>
                        @if($company->srcset && $company->srcset['full'])
                            @foreach($company->srcset['full'] as $size => $path)
                                <source media="(max-width: {{$size}}px)"
                                        srcset="/{{$path}}">
                            @endforeach
                        @endif
                        <img
                            src="{{$company->pictures && $company->pictures['full'] ? '/' . $company->pictures['full'] : '/img/placeholders/logo-160x160.png'}}"
                            alt="{{$company->name}}" class="rounded-full" itemprop="logo">
                    </picture>
                    <div class="flex flex-col gap-3">
                        <h2 id="{{$company->slug}}"
                            class="font-display font-bold text-blue text-4xl tracking-wider uppercase"
                            itemprop="name">{{$company->name}}</h2>
                        <div class="flex flex-col text-lg" itemscope itemtype="https://schema.org/PostalAddress"
                             itemprop="location">
                            <p><span itemprop="streetAddress">{{$company->streetAddres}}</span></p>
                            <p><span itemprop="postalCode">{{$company->postalCode}}</span> <span
                                    itemprop="addressLocality">{{$company->addressLocality}}</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    {!! $company->description !!}
                </div>
            </div>
            <a href="{{$company->website_link}}"
               class="flex self-start gap-3 uppercase bg-orange text-white py-3 pl-7 pr-5 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                <span>{{__('jobs.partners.single.website_button')}}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                     class="fill-white">
                    <path
                        d="M18,10.82a1,1,0,0,0-1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7h7.18a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V19a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3V11.82A1,1,0,0,0,18,10.82Zm3.92-8.2a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L8.29,14.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/>
                </svg>
            </a>
            @if(count($members) > 0)
                <div class="flex flex-col gap-5">
                    <h3
                        class="font-display font-semibold text-blue text-xl tracking-wider">{{__('jobs.partners.single.members_title')}}</h3>
                    <div class="flex flex-col gap-2">
                        <div
                            class="flex flex-col gap-6 justify-items-center sm:grid sm:grid-cols-2 sm:gap-8 lg:grid-cols-3">
                            @foreach($members as $member)
                                <x-partners.member :member="$member"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(count($offers) > 0)
                <div class="flex flex-col gap-5">
                    <h3
                        class="font-display font-semibold text-blue text-xl tracking-wider">{{__('jobs.partners.single.internships_title')}}</h3>
                    <div
                        class="flex flex-col gap-6 justify-items-center sm:grid sm:grid-cols-2 sm:gap-8 lg:grid-cols-3">
                        @foreach($offers as $offer)
                            <x-jobs.article :offer="$offer->translations->where('locale', app()->getLocale())->first()"
                                            :company="$offer->company->translations->where('locale', app()->getLocale())->first()" :parent="'partner-show'">
                                <h3 id="{{$offer->translations->where('locale', app()->getLocale())->first()->slug}}-{{$offer->company->translations->where('locale', app()->getLocale())->first()->slug}}"
                                    class="text-xl uppercase">{{$offer->translations->where('locale', app()->getLocale())->first()->title}}</h3>
                            </x-jobs.article>
                        @endforeach
                    </div>
                </div>
            @endif
            @if(count($students) > 0)
                <div class="flex flex-col gap-5">
                    <h3
                        class="font-display font-semibold text-blue text-xl tracking-wider">{{__('jobs.partners.single.alumnis_title')}}</h3>
                    <div class="flex flex-col gap-2">
                        <div
                            class="flex flex-col gap-6 justify-items-center sm:grid sm:grid-cols-2 sm:gap-8 lg:grid-cols-3">
                            @foreach($students as $student)
                                <x-alumnis.card
                                    :alumni="$student->translations->where('locale', app()->getLocale())->first()"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

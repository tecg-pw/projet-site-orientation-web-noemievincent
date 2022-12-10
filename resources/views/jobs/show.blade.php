<x-header :head_title="$offer->title"/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$offer->slug}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/jobs/offers"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('jobs.single.back_to_offers_link')}}</span>
                </a>
                <h2 id="{{$offer->slug}}"
                    class="font-display font-bold text-blue text-4xl tracking-wider uppercase">{{$offer->title}}</h2>
            </div>
            <div class="grid grid-cols-3 gap-11">
                <div class="flex flex-col gap-6 col-span-1">
                    <div class="flex gap-3">
                        <img src="https://placehold.jp/80x80.png" alt="nom" height="80" width="80"
                             class="rounded-full items-start">
                        <div>
                            <a href="/{{app()->getLocale()}}/jobs/partners/{{$company->slug}}"
                               class="text-xl underline underline-offset-2 hover:text-orange transition ease-in-out duration-200">
                                {{$company->name}}</a>
                            <p class="">{{$offer->location}}</p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <time
                            datetime="{{$offer->published_at->format('d-m-Y')}}">{{$offer->published_at->format('d F Y')}}</time>
                        -
                        <p>{{$offer->duration}}</p>
                    </div>
                    <section aria-labelledby="skills">
                        <h3 id="skills"
                            class="font-display font-semibold text-blue text-lg">{{__('jobs.single.skills_title')}}</h3>
                        <ul class="list-disc list-inside marker:text-orange">
                            @foreach($offer->skills as $skill)
                                <li>{{$skill->name}}</li>
                            @endforeach
                        </ul>
                    </section>
                </div>
                <div class="flex flex-col gap-10 col-span-2">
                    <div class="flex justify-between items-center">
                        <div class="flex gap-2">
                            <p>{{__('jobs.single.alternative')}}</p>
                            <ul class="flex gap-2">
                                @foreach($alternatives as $key => $alt)
                                    <li>
                                        <a class="hover:underline underline-offset-2 decoration-1 decoration-solid text-orange"
                                           href="/{{$alt->locale}}/jobs/offers/{{$company->slug}}/{{$alt->slug}}">{{__('locales.' . $alt->locale)}}</a>{{$key == count($alternatives)-1 ? '' : ', '}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <a href="{{$offer->method_link}}"
                           class="flex self-end gap-3 uppercase bg-orange text-white py-3 pl-7 pr-5 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                            <span>{{__('jobs.single.apply_button')}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                 class="fill-white">
                                <path
                                    d="M18,10.82a1,1,0,0,0-1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7h7.18a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V19a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3V11.82A1,1,0,0,0,18,10.82Zm3.92-8.2a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L8.29,14.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/>
                            </svg>
                        </a>
                    </div>
                    <section aria-labelledby="description">
                        <h3 id="description"
                            class="font-display font-semibold text-blue text-xl tracking-wider mb-4">{{__('jobs.single.description_title')}}</h3>
                        <p>
                            {{$offer->body}}
                        </p>
                    </section>
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

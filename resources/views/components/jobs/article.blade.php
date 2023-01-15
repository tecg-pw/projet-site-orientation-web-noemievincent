@props(['offer', 'company', 'parent'])
<article aria-labelledby="{{$offer->slug}}-{{$company->slug}}{{$parent === 'aside' ? '-aside' : ''}}"
         class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 w-full max-w-sm">
    <div class="relative">
        <a href="/{{app()->getLocale()}}/jobs/offers/{{$company->slug}}/{{$offer->slug}}"
           class="full-link">{{$offer->title}}</a>
        <div>
            <div class="p-3 flex flex-col gap-3">
                {{$slot}}
                <div class="flex gap-3">
                    <picture>
                        @if($company->srcset && $company->srcset['thumbnail'])
                            @foreach($company->srcset['thumbnail'] as $size => $path)
                                <source media="(max-width: {{$size}}px)"
                                        srcset="/{{$path}}">
                            @endforeach
                        @endif
                        <img
                            src="{{$company->pictures && $company->pictures['thumbnail'] ? '/' . $company->pictures['thumbnail'] : '/img/placeholders/logo-60x60.png'}}"
                            alt="{{$company->name}}" class="rounded-full">
                    </picture>
                    <div>
                        <p>{{$company->name}}</p>
                        <p class="font-light">{{$offer->location}}</p>
                    </div>
                </div>
                <div class="flex gap-2 font-light text-sm">
                    <time
                        datetime="{{$offer->start_date->format('Y-m-d')}}">{{$offer->start_date->translatedFormat('d F Y')}}</time>
                    —
                    <p>{{$offer->duration}}</p>
                </div>
                {!! __('jobs.published_at', ['datetime' => $offer->published_at->translatedFormat('Y-m-d'), 'date' => $offer->published_at->translatedFormat('d F Y')]) !!}
            </div>
        </div>
    </div>
</article>

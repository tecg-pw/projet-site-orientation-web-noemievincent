@props(['offer'])
<article aria-labelledby="{{$offer->slug}}"
         class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 w-full">
    <div class="relative">
        <a href="/{{app()->getLocale()}}/jobs/offers/{{$offer->company->slug}}/{{$offer->slug}}"
           class="full-link">{{$offer->title}}</a>
        <div>
            <div class="p-3 flex flex-col gap-3">
                <h3 id="{{$offer->slug}}" class="text-xl uppercase">{{$offer->title}}</h3>
                <div class="flex gap-2">
                    <img src="https://placehold.jp/50x50.png" alt="" height="50" width="50" class="rounded-full">
                    <div>
                        <p>{{$offer->company->name}}</p>
                        <p class="font-light">{{$offer->location}}</p>
                    </div>
                </div>
                <div class="flex gap-2 font-light text-sm">
                    <time
                        datetime="{{$offer->start_date->format('d-m-Y')}}">{{$offer->start_date->format('d F Y')}}</time>
                    —
                    <p>{{$offer->duration}}</p>
                </div>
                {!! __('jobs.published_at', ['datetime' => $offer->published_at->format('d-m-Y'), 'date' => $offer->published_at->format('d F Y')]) !!}
            </div>
        </div>
    </div>
</article>

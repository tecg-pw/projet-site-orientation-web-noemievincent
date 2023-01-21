@props([
    /** @var \mixed */
    'offers'
])
<div class="flex flex-col gap-4 justify-items-center sm:grid sm:grid-cols-2 sm:gap-6 lg:grid-cols-3" id="loop">
    @foreach($offers as $offer)
        <x-jobs.article :offer="$offer->translations->where('locale', app()->getLocale())->first()"
                        :company="$offer->company->translations->where('locale', app()->getLocale())->first()"
                        :parent="'index'">
            <h3 id="{{$offer->translations->where('locale', app()->getLocale())->first()->slug}}-{{$offer->company->translations->where('locale', app()->getLocale())->first()->slug}}"
                class="text-xl uppercase">{{$offer->translations->where('locale', app()->getLocale())->first()->title}}</h3>
        </x-jobs.article>
    @endforeach
</div>

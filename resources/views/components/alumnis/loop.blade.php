@props([
    /** @var \mixed */
    'alumnis'
])
<div class="flex flex-col justify-items-center gap-8 sm:grid sm:grid-cols-2 md:grid-cols-3" id="loop">
    @foreach($alumnis as $alumni)
        <x-alumnis.card :alumni="$alumni->translations->where('locale', app()->getLocale())->first()"/>
    @endforeach
</div>

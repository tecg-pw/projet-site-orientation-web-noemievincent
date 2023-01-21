@props([
    /** @var \mixed */
    'partners'
])
<div class="flex flex-col gap-4 justify-items-center sm:grid sm:grid-cols-2 sm:gap-6 lg:grid-cols-3" id="loop">
    @foreach($partners as $partner)
        <x-partners.article
                :partner="$partner->translations->where('locale', app()->getLocale())->first()"/>
    @endforeach
</div>

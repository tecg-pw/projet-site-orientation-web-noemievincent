@props([
    /** @var \mixed */
    'tutorials'
])
<div class="flex flex-col gap-6 justify-items-center sm:grid sm:grid-cols-2 sm:gap-8" id="loop">
    @foreach($tutorials as $tutorial)
        <x-tutorials.article
                :tutorial="$tutorial->translations->where('locale', app()->getLocale())->first()"
                :languages="$tutorial->languages"
                is_favorite="{{auth()->user() ? (count($tutorial->users) > 0 ?  ($tutorial->users->where('id', auth()->user()->id)->first() ? 'true' : 'false') : 'false') : 'false'}}"/>
    @endforeach
</div>



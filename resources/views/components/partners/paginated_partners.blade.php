@props([
    'partners'
])
<div class="flex flex-col gap-20" id="paginated_partners">
    @if(count($partners) > 0)
        <x-partners.loop :partners="$partners"/>
        <x-partners.pagination :partners="$partners"/>
    @else
        <p class="text-center text-xl mt-12">{{__('search.no_results')}}</p>
    @endif
</div>

@props([
    'alumnis'
])
<div class="flex flex-col gap-8" id="paginated_alumnis">
    @if(count($alumnis) > 0)
        <x-alumnis.loop :alumnis="$alumnis"/>
        <x-alumnis.pagination :alumnis="$alumnis"/>
    @else
        <p class="text-center text-xl mt-12">{{__('search.no_results')}}</p>
    @endif
</div>

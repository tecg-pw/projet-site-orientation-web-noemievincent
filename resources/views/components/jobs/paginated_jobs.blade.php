@props([
    'offers'
])
<div class="flex flex-col gap-20" id="paginated_jobs">
    @if(count($offers) > 0)
        <x-jobs.loop :offers="$offers"/>
        <x-jobs.pagination :offers="$offers"/>
    @else
        <p class="text-center text-xl mt-12">{{__('search.no_results')}}</p>
    @endif
</div>

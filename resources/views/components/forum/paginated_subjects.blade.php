@props(['questions'])
<div class="flex flex-col gap-12" id="paginated_subjects">
    @if(count($questions) > 0)
        <x-forum.subjects.loop :questions="$questions"/>
        <x-forum.subjects.pagination :questions="$questions"/>
    @else
        <p class="text-center text-xl">{{__('search.no_results')}}</p>
    @endif
</div>

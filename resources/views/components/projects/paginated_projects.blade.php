@props([
    'projects'
])
<div class="flex flex-col gap-8" id="paginated_projects">
    @if(count($projects) > 0)
        <x-projects.loop :projects="$projects"/>
        <x-projects.pagination :projects="$projects"/>
    @else
        <p class="text-center text-xl mt-12">{{__('search.no_results')}}</p>
    @endif
</div>

@props([
    'tutorials'
])
<div class="flex flex-col gap-20" id="paginated_tutorials">
    @if(count($tutorials) > 0)
        <x-tutorials.loop :tutorials="$tutorials"/>
        <x-tutorials.pagination :tutorials="$tutorials"/>
    @else
        <p class="text-center text-xl mt-12">{{__('search.no_results')}}</p>
    @endif

</div>

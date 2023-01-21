@props(['replies'])
<div class="flex flex-col gap-12" id="paginated_replies">
    @if(count($replies) > 0)
        <x-forum.replies.loop :replies="$replies"/>
        <x-forum.replies.pagination :replies="$replies"/>
    @else
        <p class="text-center text-xl">{{__('search.no_results')}}</p>
    @endif
</div>

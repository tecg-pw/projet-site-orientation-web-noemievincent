@props(['replies'])
<div class="flex flex-col gap-20">
    <div class="flex flex-col gap-10">
        @foreach($replies as $reply)
            <x-forum.reply :reply="$reply"/>
        @endforeach
    </div>
    <div>
        {{$replies->links()}}
    </div>
</div>

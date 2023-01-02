@props(['replies'])
<div class="flex flex-col gap-12">
    <div class="flex flex-col gap-8">
        @foreach($replies as $reply)
            <x-forum.reply :reply="$reply"/>
        @endforeach
    </div>
    <div>
        {{$replies->links()}}
    </div>
</div>

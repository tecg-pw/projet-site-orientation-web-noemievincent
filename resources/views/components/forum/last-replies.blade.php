@props(['replies'])
<div class="flex flex-col gap-12">
    <div class="flex flex-col gap-8">
        @foreach($replies as $reply)
            @php
                $question = \App\Models\Question::find($reply->id)
            @endphp
            <x-forum.reply :reply="$reply" :question="$question"/>
        @endforeach
    </div>
    <div>
        {{$replies->links()}}
    </div>
</div>

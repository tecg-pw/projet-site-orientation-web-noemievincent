@props([
    /** @var \mixed */
    'replies'
])
<div class="flex flex-col gap-8" id="loop">
    @foreach($replies as $reply)
        @php
            $question = \App\Models\Question::find($reply->question_id);
        @endphp
        <x-forum.reply :reply="$reply" :question="$question"/>
    @endforeach
</div>

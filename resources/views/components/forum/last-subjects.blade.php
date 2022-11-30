@props(['questions'])
<div class="flex flex-col gap-20">
    <div class="flex flex-col gap-6">
        @foreach($questions as $question)
            <x-forum.article :question="$question"/>
        @endforeach
    </div>
    <div>
        {{$questions->links()}}
    </div>
</div>

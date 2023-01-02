@props(['questions'])
<div class="flex flex-col gap-12">
    <div class="flex flex-col gap-8">
        @foreach($questions as $question)
            <x-forum.article :question="$question"
                             :category="$question->category->translations->where('locale', app()->getLocale())->first()"/>
        @endforeach
    </div>
    <div>
        {{$questions->links()}}
    </div>
</div>

@props([
    /** @var \mixed */
    'questions'
])
<div class="flex flex-col gap-8" id="loop">
    @foreach($questions as $question)
        <x-forum.article :question="$question"
                         :category="$question->category->translations->where('locale', app()->getLocale())->first()"/>
    @endforeach
</div>

@props([
    /** @var \mixed */
    'questions'
])
<div class="flex flex-col gap-6" id="loop">
    @foreach($questions as $question)
        <x-faq.faq :question="$question->translations->where('locale', app()->getLocale())->first()"/>
    @endforeach
</div>

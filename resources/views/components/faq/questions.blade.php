@props([
    'questions'
])
<div class="flex flex-col gap-8" id="questions">
    @if(count($questions) > 0)
        <x-faq.loop :questions="$questions"/>
    @else
        <p class="text-center text-xl mt-12">{{__('search.no_results')}}</p>
    @endif
</div>

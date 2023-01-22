<x-mail::message>
# {{__('emails.forum.question_created.subject')}}
{{__('emails.greetings', ['name' => $question->user->firstname])}}<br>
{{__('emails.forum.question_created.body', ['title' => $question->title])}}
<x-mail::button
    :url="config('app.url'). '/' . app()->getLocale() . '/forum/questions/' . $question->slug">
    {{__('emails.forum.question_created.action')}}
</x-mail::button>
{{__('emails.closure')}}<br>
{{ config('app.name') }}
</x-mail::message>

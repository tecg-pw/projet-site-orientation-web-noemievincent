<x-mail::message>
# {{__('emails.forum.resolved_question.subject')}}
{{__('emails.greetings', ['name' => $question->user->firstname])}}<br>
{{__('emails.forum.resolved_question.body', ['title' => $question->title])}}
<x-mail::button
    :url="'http://projets-web.test/' . app()->getLocale() . '/forum/questions/' . $question->slug">
    {{__('emails.forum.resolved_question.action')}}
</x-mail::button>
{{__('emails.closure')}}<br>
{{ config('app.name') }}
</x-mail::message>

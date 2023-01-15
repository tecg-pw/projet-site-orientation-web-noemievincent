<x-mail::message>
# {{__('emails.forum.reply_created.subject')}}
{{__('emails.greetings', ['name' => $question->user->firstname])}}<br>
{{__('emails.forum.reply_created.body', ['name' => $reply->user->firstname, 'title' => $question->title])}}
<x-mail::button
    :url="'http://projets-web.test/' . app()->getLocale() . '/forum/questions/' . $question->slug . '#reply-' . $reply->id">
{{__('emails.forum.reply_created.action')}}
</x-mail::button>
{{__('emails.closure')}}<br>
{{ config('app.name') }}
</x-mail::message>

@props(['reply', 'question'])
<div class="flex flex-col gap-4" id="reply-{{$reply->id}}">
    <div class="flex justify-between items-center">
        <div class="flex gap-4">
            <picture>
                <img
                    src="{{$reply->user->pictures && $reply->user->pictures['medium'] ? '/' . $reply->user->pictures['medium'] : '/img/placeholders/person-60x60.png'}}"
                    alt="{{$reply->user->fullname}}" class="rounded-full">
            </picture>
            <div>
                <p class="text-lg font-medium"><a href="/{{app()->getLocale()}}/users/{{$reply->user->slug}}"
                                                  class="hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">{{$reply->user->fullname}}</a>
                </p>
                <p class="text-sm">{{trans_choice('roles.' . $reply->user->role, $reply->user->gender)}}</p>
            </div>
        </div>
        @auth()
            @if(auth()->user()->id === $reply->user->id)
                <div class="flex gap-2">
                    <a href="/{{app()->getLocale()}}/forum/questions/{{$question->slug}}?edit-reply={{$reply->id}}">
                        <span class="sr-only">Modifier la question</span>
                        <span>
                        <svg class="h-8 w-8 text-orange hover:text-orange-dark transitionable" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </span>
                    </a>
                    <a href="/{{app()->getLocale()}}/forum/questions/{{$question->slug}}?confirm-delete=reply&reply={{$reply->id}}">
                        <span class="sr-only">Supprimer la question</span>
                        <span>
                        <svg class="h-8 w-8 text-red-600 hover:text-red-700 transitionable" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </span>
                    </a>
                </div>
            @endif
        @endauth
    </div>
    <div class="flex flex-col gap-2">
        @if(Request::query('edit-reply') == $reply->id && auth()->user()->id === $reply->user_id)
            <form action="/{{app()->getLocale()}}/forum/questions/{{$question->slug}}/reply/{{$reply->id}}/edit"
                  method="post"
                  class="flex flex-col gap-4">
                @csrf
                <x-forms.tinymce-editor :name="'body'"
                                        :trans="'forms.labels.answer'">{{old('body') ?? $reply->body}}</x-forms.tinymce-editor>
                @
                <div class="flex gap-8 items-center justify-end">
                    <a href="/{{app()->getLocale()}}/forum/questions/{{$question->slug}}"
                       class="uppercase text-orange">{{__('forms.links.cancel')}}</a>
                    <button type="submit"
                            class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transitionable">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                             class="fill-white h-full">
                            <path
                                d="M17,9.5H7.41l1.3-1.29A1,1,0,0,0,7.29,6.79l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L7.41,11.5H17a1,1,0,0,1,1,1v4a1,1,0,0,0,2,0v-4A3,3,0,0,0,17,9.5Z"/>
                        </svg>
                        <span>{{__('forms.buttons.update_reply')}}</span>
                    </button>
                </div>
            </form>
        @else
            <div class="wysiwyg">
                {!! $reply->body !!}
            </div>
            <div class="font-light flex flex-col gap-1 sm:flex-row sm:gap-4">
                {!! __('forum.reply.infos', ['datetime' => $reply->published_at->format('Y-m-d'), 'date' => $reply->published_at->format('d/m/Y'), 'datetimeHours' => $reply->published_at->format('H:i'), 'time' => $reply->published_at->format('H:i')]) !!}
                @if(Request::path() != app()->getLocale() . '/forum/questions/' . $reply->question->slug)
                    <div class="bg-blue/50 h-max-content w-px"></div>
                    {!! __('forum.reply.question', ['question' => $reply->question->title, 'slug' => $reply->question->slug]) !!}
                @endif
            </div>
        @endif
    </div>
</div>

<x-header :head_title="$question->title"/>
@if(Request::has('confirm-delete'))
    <div class="fixed z-50 w-full h-full bg-blue-dark/30 flex justify-center items-center">
        <div class="bg-white rounded-2xl border border-blue/20 p-6 flex flex-col gap-2">
            <p class="text-xl font-semibold text-blue-dark">Confirmer la suppression</p>
            <form action="/{{app()->getLocale()}}/forum/questions/{{$question->slug}}/delete" method="post"
                  class="flex flex-col gap-7">
                @csrf
                <label for="confirm-delete">Souhaitez-vous supprimer votre question ?</label>
                <div class="flex justify-between items-center">
                    <a href="/{{app()->getLocale()}}/forum/questions/{{$question->slug}}"
                       class="text-orange hover:text-orange-dark transitionable">Annuler</a>
                    <input name="confirm-delete" id="confirm-delete" value="Supprimer" type="submit"
                           class="bg-red-600 hover:bg-red-700 py-2 px-3 text-white rounded-lg transitionable"/>
                </div>
            </form>
        </div>
    </div>
@endif
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="{{$question->slug}}" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/forum"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('forum.single.back_to_questions_link')}}</span>
                </a>
                <h2 id="{{$question->slug}}"
                    class="single-h2">{{$question->title}}</h2>
            </div>
            <x-forum.question :question="$question"/>
            @if(count($replies) > 0)
                <div class="flex flex-col gap-8">
                    @foreach($replies as $reply)
                        <x-forum.reply :reply="$reply"/>
                    @endforeach
                    <a href="#" class="flex items-center gap-4 uppercase text-orange text-sm mt-1">
                        <span>{{__('forum.single.more_replies')}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="12" width="6"
                             class="rotate-90 fill-orange h-full">
                            <path
                                d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                                transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            @else
                <p>Pas encore de réponses...</p>
            @endif
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

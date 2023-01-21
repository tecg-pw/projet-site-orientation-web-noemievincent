@props(['question'])
<article aria-labelledby="{{$question->slug}}" class="flex flex-col gap-5">
    <div class="flex flex-col gap-3">
        <div class="flex justify-between">
            <h3 id="{{$question->slug}}" class="title sm:text-xl first-letter:capitalize">{{$question->title}}</h3>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="18"
                     width="9"
                     class="-rotate-90 fill-orange h-full">
                    <path
                        d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                        transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                </svg>
            </a>
        </div>
        <div class="wysiwyg body first-letter:capitalize font-light cut-text text-sm">
            {!! $question->body !!}
        </div>
    </div>
    <div class="bg-blue/50 h-px w-full"></div>
</article>

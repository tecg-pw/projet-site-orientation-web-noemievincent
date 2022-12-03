@props(['new', 'category'])
<article aria-labelledby="{{$new->slug}}" class="group relative">
    <a href="/{{app()->getLocale()}}/news/{{$new->slug}}"
       class="full-link">{{__('news.read_new', ['title' => $new->title])}}</a>
    <div>
        <div class="p-4 flex flex-col justify-between absolute w-full top-0 bottom-0 z-10">
            <h4 id="{{$new->slug}}" class="text-white text-xl">{{$new->title}}</h4>
            <div>
                <div class="flex justify-between font-light text-white">
                    <p>{{$category->name}}</p>
                    <time
                        datetime="{{$new->published_at->translatedFormat('d-m-Y')}}">{{$new->published_at->translatedFormat('d F Y')}}</time>
                </div>
            </div>
        </div>
        <div
            class="relative before:overlay before:bg-blue/40 before:rounded-2xl before:transition before:ease-in-out before:duration-200 group-hover:before:bg-blue/60">
            <img src="https://placehold.jp/424x290.png" height="290" width="424"
                 alt="{{__('news.read_new', ['title' => $new->title])}}"
                 class="object-cover w-full rounded-2xl">
        </div>
    </div>
</article>

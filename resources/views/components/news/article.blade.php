@props(['new', 'category', 'parent'])
<article aria-labelledby="{{$new->slug}}{{$parent === 'aside' ? '-aside' : ''}}" class="group relative max-w-sm">
    <a href="/{{app()->getLocale()}}/news/{{$new->slug}}"
       class="full-link">{{__('news.read_new', ['title' => $new->title])}}</a>
    <div>
        <div class="p-3 flex flex-col justify-between absolute w-full top-0 bottom-0 z-10">
            {{$slot}}
            <div>
                <div class="font-light text-white flex justify-between">
                    <p>{{$category->name}}</p>
                    <time
                        datetime="{{$new->published_at->translatedFormat('Y-m-d')}}">{{$new->published_at->translatedFormat('d F Y')}}</time>
                </div>
            </div>
        </div>
        <div
            class="relative w-full h-full before:overlay before:bg-blue/50 before:rounded-2xl before:transitionable group-hover:before:bg-blue/70">
            <picture>
                @if($new->srcset && $new->srcset['thumbnail'])
                    @foreach($new->srcset['thumbnail'] as $size => $path)
                        <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
                    @endforeach
                @endif
                    <img
                        src="{{$new->pictures && $new->pictures['thumbnail'] ? '/' . $new->pictures['thumbnail'] : '/img/placeholders/news-384x262.png'}}"
                        alt="{{__('news.read_new', ['title' => $new->title])}}" class="w-full h-full rounded-2xl">
            </picture>
        </div>
    </div>
</article>

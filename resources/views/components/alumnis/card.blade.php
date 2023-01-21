@props(['alumni'])
<div
    class="w-full bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transitionable p-5">
    <div class="flex justify-between md:flex-col md:gap-3 lg:flex-row">
        <div class="flex flex-col gap-4">
            <picture>
                @if($alumni->srcset && $alumni->srcset['thumbnail'])
                    @foreach($alumni->srcset['thumbnail'] as $size => $path)
                        <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
                    @endforeach
                @endif
                <img
                    src="{{$alumni->pictures && $alumni->pictures['thumbnail'] ? '/' . $alumni->pictures['thumbnail'] : '/img/placeholders/person-160x160.png'}}"
                    alt="{{$alumni->fullname}}" class="rounded-full w-full h-full">
            </picture>
            <div>
                <h3 class="title first-letter:capitalize font-semibold text-xl hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">
                    <a href="/{{app()->getLocale()}}/alumnis/{{$alumni->slug}}">{{$alumni->fullname}}</a></h3>
                <span class="flex gap-1">
                    <time
                        datetime="{{$alumni->start_year->format('Y-m')}}">{{$alumni->start_year->format('Y')}}</time> -
                    @if($alumni->end_year != null)
                        <time datetime="{{$alumni->end_year->format('Y-m')}}">{{$alumni->end_year->format('Y')}}</time>
                    @else
                        <span>{{__('alumnis.end_year')}}</span>
                    @endif
                </span>
            </div>
        </div>
        <ul class="self-start flex flex-col gap-4 md:flex-row lg:flex-col">
            <li><x-socials.github :link="$alumni->github_link" :id="$alumni->slug" :name="$alumni->fullname"/></li>
            <li><x-socials.linkedin :link="$alumni->linkedin_link" :id="$alumni->slug" :name="$alumni->fullname"/></li>
            @if($alumni->instagram_link)
                <li><x-socials.instagram :link="$alumni->instagram_link" :id="$alumni->slug" :name="$alumni->fullname"/></li>
            @endif
        </ul>
    </div>
</div>

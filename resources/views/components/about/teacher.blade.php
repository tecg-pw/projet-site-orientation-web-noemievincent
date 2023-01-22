@props(['teacher'])
<div
    class="w-full xl:max-w-sm bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 p-5">
    <div class="flex justify-between md:gap-4 flex-col h-full">
        <div class="flex gap-4 justify-between">
            <picture>
                @if($teacher->srcset && $teacher->srcset['thumbnail'])
                    @foreach($teacher->srcset['thumbnail'] as $size => $path)
                        <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
                    @endforeach
                @endif
                <img
                    src="{{$teacher->pictures && $teacher->pictures['thumbnail'] ? '/' . $teacher->pictures['thumbnail'] : '/img/placeholders/person-160x160.png'}}"
                    alt="{{$teacher->fullname}}" class="rounded-full">
            </picture>
            <ul class="self-start flex flex-col gap-4 md:max-lg:gap-2">
                @if($teacher->github_link)
                    <li><x-socials.github :link="$teacher->github_link" :id="$teacher->slug" :name="$teacher->fullname"/></li>
                @endif
                @if($teacher->linkedin_link)
                    <li><x-socials.linkedin :link="$teacher->linkedin_link" :id="$teacher->slug" :name="$teacher->fullname"/></li>
                @endif
            </ul>
        </div>
        <div>
            <h3 class="md:max-lg:text-lg cursor-pointer font-semibold text-xl hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">
                <a href="/{{app()->getLocale()}}/teachers/{{$teacher->slug}}">{{$teacher->fullname}}</a></h3>
            <p class="md:max-lg:text-sm">{{$teacher->email}}</p>
        </div>
    </div>
</div>

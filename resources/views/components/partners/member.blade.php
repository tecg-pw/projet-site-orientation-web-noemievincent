@props(['member'])
<div
    class="w-full bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 p-5">
    <div class="flex justify-between">
        <div class="flex flex-col gap-4">
            <picture>
                @if($member->srcset && $member->srcset['thumbnail'])
                    @foreach($member->srcset['thumbnail'] as $size => $path)
                        <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
                    @endforeach
                @endif
                <img
                    src="{{$member->pictures && $member->pictures['thumbnail'] ? '/' . $member->pictures['thumbnail'] : '/img/placeholders/person-160x160.png'}}"
                    alt="{{$member->fullname}}" class="rounded-full">
            </picture>
            <h3 class="cursor-pointer font-semibold text-xl">{{$member->fullname}}</h3>
        </div>
        <ul class="flex flex-col gap-4">
            <li><x-socials.github :link="$member->github_link" :id="$member->slug" :name="$member->fullname"/></li>
            <li><x-socials.linkedin :link="$member->linkedin_link" :id="$member->slug" :name="$member->fullname"/></li>
        </ul>
    </div>
</div>

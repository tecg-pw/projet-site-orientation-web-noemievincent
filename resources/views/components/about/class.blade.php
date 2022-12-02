@props(['course'])
<div
    class="bg-white rounded-2xl border border-blue/20 p-5 hover:bg-blue-card transition ease-in-out duration-200 relative">
    <a href="/{{app()->getLocale()}}/classes/{{$course->slug}}" class="full-link">{{__('classes.see_class_link')}}</a>
    <div>
        <div class="flex justify-between items-center mb-2">
            <h3 class="text-xl font-semibold">{{$course->name}}</h3>
        </div>
        <p class="text-sm">{{$course->description}}</p>
    </div>
</div>

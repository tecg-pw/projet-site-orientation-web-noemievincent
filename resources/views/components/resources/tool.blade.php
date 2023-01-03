@props(['tool'])
<div
    class="relative hover:bg-blue-card transition ease-in-out duration-200 bg-white rounded-2xl border border-blue/20 p-5">
    <a href="{{$tool->link}}" class="full-link">{{$tool->title}}</a>
    <div class="flex justify-between mb-2">
        <h3 class="text-xl font-semibold">{{$tool->title}}</h3>
    </div>
    <div class="text-sm">{!! $tool->description !!}
    </div>
</div>

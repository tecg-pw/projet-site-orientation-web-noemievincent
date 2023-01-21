@props(['label', 'dates', 'property', 'format'])
<div class="flex gap-1">
    <fieldset class="rounded-lg px-3 py-1 bg-white border border-blue/40">
        <label for="{{$property ?? 'date'}}" class="sr-only">{{__('filters.titles.' . $label)}} :</label>
        <select name="{{$property ?? 'date'}}" id="{{$property ?? 'date'}}" class="bg-transparent">
            <option value="all">{{__('filters.titles.' . $label)}}</option>
            @if($property === 'end_year')
                <option value="now" @selected(request()->input($property) == 'now')>{{__('filters.titles.now')}}</option>
            @endif
            @foreach($dates as $date)
                <option
                    value="{{$date->$property->translatedFormat('Y-m')}}" @selected(request()->input($property ?? 'date') == $date->$property->translatedFormat('Y-m'))>{{ucfirst($date->$property->translatedFormat($format))}}</option>
            @endforeach
        </select>
    </fieldset>
</div>

@props(['dates', 'property', 'format'])
<div class="flex gap-1">
    <fieldset class="rounded-lg px-3 py-1 bg-white border border-blue/40">
        <label for="date" class="sr-only">{{__('filters.titles.date')}} :</label>
        <select name="date" id="date" class="bg-transparent">
            @foreach($dates as $date)
                <option
                    value="{{$date->$property->translatedFormat($format)}}">{{ucfirst($date->$property->translatedFormat($format))}}</option>
            @endforeach
        </select>
    </fieldset>
</div>

@props(['dates', 'property', 'format'])
<div class="flex gap-1">
    <fieldset class="rounded-lg px-3 py-1 bg-white border border-blue/40">
        <label for="year" class="sr-only">{{__('Année')}} :</label>
        <select name="year" id="year" class="bg-transparent">
            @foreach($dates as $date)
                <option value="{{$date->$property->format($format)}}">{{$date->$property->format($format)}}</option>
            @endforeach
        </select>
    </fieldset>
</div>

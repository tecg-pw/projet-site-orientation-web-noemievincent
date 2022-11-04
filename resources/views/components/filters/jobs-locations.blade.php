<div>
    <label for="location" class="sr-only">{{__('Lieu')}} :</label>
    <select name="location" id="location" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="location">Lieu</option>
        @for($i = 1; $i < 5; $i++)
            <option value="location-{{$i}}">Lieu {{$i}}</option>
        @endfor
    </select>
</div>

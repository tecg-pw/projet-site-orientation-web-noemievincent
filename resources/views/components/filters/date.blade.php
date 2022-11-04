<div>
    <label for="date" class="sr-only">{{__('Date')}} :</label>
    <div id="date" class="rounded-lg px-3 py-1 bg-white border border-blue/40 flex gap-3">
        <select name="month" id="month" class="bg-transparent">
            @for($i = 1; $i < 12; $i++)
                <option value="month-{{$i}}">Mois {{$i}}</option>
            @endfor
        </select>
        <select name="year" id="year" class="bg-transparent">
            @for($i = 0; $i < 9; $i++)
                <option value="year-{{$i}}">201{{$i}}</option>
            @endfor
        </select>
    </div>

</div>

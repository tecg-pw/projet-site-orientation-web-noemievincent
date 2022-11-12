<div class="flex gap-1">
    <fieldset class="rounded-lg px-3 py-1 bg-white border border-blue/40">
        <label for="year" class="sr-only">{{__('Année')}} :</label>
        <select name="year" id="year" class="bg-transparent">
            @for($i = 0; $i < 9; $i++)
                <option value="year-{{$i}}">201{{$i}}</option>
            @endfor
        </select>
    </fieldset>
</div>

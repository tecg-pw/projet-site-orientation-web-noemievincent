@props(['id', 'trans'])
<div class="flex flex-col gap-2">
    <label for="wisiwyg" class="text-lg">
        @if ($errors->has($id))
            <x-forms.error-label :label="$id"/>
        @else
            <span>{{__($trans)}}</span>
        @endif
    </label>
    <textarea name="{{$id}}" id="wisiwyg" cols="30" rows="10"
              class="@error('{$id}') error-outline @enderror pl-2 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">{{$slot}}</textarea>
</div>

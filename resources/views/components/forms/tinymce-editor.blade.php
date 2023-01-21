@props(['name', 'trans'])
<div class="flex flex-col gap-2">
    <label for="wysiwyg" class="text-lg">
        @if ($errors->has($name))
            <x-forms.error-label :label="$name"/>
        @else
            <span>{{__($trans)}}</span>
        @endif
    </label>
    <textarea name="{{$name}}" id="wysiwyg" cols="30" rows="10"
              class="@error($name) error-outline @enderror pl-2 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">{{$slot}}</textarea>
</div>

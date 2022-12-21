<div class="flex flex-col gap-1 w-full">
    <label for="firstname">
        @if ($errors->has('firstname'))
            <x-forms.error-label :label="'firstname'"/>
        @else
            <span class="text-lg text-blue-dark flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                 class="fill-blue-dark">
                <path
                    d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
            </svg>
            <span>{{__('forms.labels.firstname')}}</span>
            </span>
        @endif
    </label>
    <input type="text" id="firstname" name="firstname"
           placeholder="Pierre" dusk="firstname-field" value="{{old('firstname')}}"
           class="@error('firstname') error-outline @enderror pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
</div>

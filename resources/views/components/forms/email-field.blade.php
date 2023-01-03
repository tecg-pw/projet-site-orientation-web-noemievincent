@props(['email'])
<div class="flex flex-col gap-1">
    <label for="email">
        @if ($errors->has('email'))
            <x-forms.error-label :label="'email'"/>
        @else
            <span class="text-lg text-blue-dark flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                 class="fill-none stroke-blue-dark stroke-2">
                <g stroke-linecap="round" stroke-linejoin="round" transform="translate(0 1)">
                    <circle cx="11" cy="10" r="4"/>
                    <path d="M15 10v1a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"/>
                </g>
            </svg>
            <span>{{__('forms.labels.email')}}</span>
            </span>
        @endif
    </label>
    <input type="email" id="email" name="email"
           placeholder="name@example.com" value="{{old('email') ?? ($email ?? '')}}"
           class="@error('email') error-outline @enderror pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transitionable"
           dusk="email-field">
</div>

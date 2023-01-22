<x-header :head_title="'profile.edit.head_title'"/>
<main class="main xl:mx-48">
    <section aria-labelledby="edit-profile" class="col-start-2 flex flex-col gap-12">
        <div>
            <div class="flex flex-col gap-4">
                <a href="/{{app()->getLocale()}}/users/{{$user->slug}}"
                   class="flex items-center gap-4 uppercase text-orange text-lg hover:gap-6 transition-all ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 24" height="16" width="8"
                         class="-scale-x-100 fill-orange h-full">
                        <path
                            d="M.4,23.649a1.084,1.084,0,0,0,1.6,0l9.341-9.916a2.5,2.5,0,0,0,0-3.392L1.929.35A1.084,1.084,0,0,0,.343.338,1.227,1.227,0,0,0,0,1.191a1.231,1.231,0,0,0,.331.858l8.611,9.14a1.252,1.252,0,0,1,0,1.7L.4,21.953a1.251,1.251,0,0,0,0,1.7"
                            transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                    </svg>
                    <span>{{__('profile.edit.back_to_profile_link')}}</span>
                </a>
                <h2 id="edit-profile"
                    class="h2">{{__('profile.edit.informations_form_title')}}</h2>
            </div>
            <form action="/{{app()->getLocale()}}/users/{{$user->slug}}/update-infos" method="post"
                  class="flex flex-col gap-8" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-8 sm:flex-row">
                        <div class="self-start">
                            @error('picture')
                            {{$message}}
                            @enderror
                            <div class="relative max-w-[160px]">
                                <label for="picture"
                                       class="absolute z-20 w-full h-full flex items-center justify-center rounded-full bg-blue/40 hover:bg-blue/60 cursor-pointer transition-all ease-in-out duration-200">
                                    <span class="sr-only">{{__('forms.labels.picture')}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         class="fill-white">
                                        <path
                                            d="M3 17.46v3.04c0 .28.22.5.5.5h3.04c.13 0 .26-.05.35-.15L17.81 9.94l-3.75-3.75L3.15 17.1c-.1.1-.15.22-.15.36zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                                    </svg>
                                </label>
                                <img id="js-preview" class="rounded-full absolute z-10 w-full h-full object-cover hidden" alt="{{$user->name}}"
                                    src="{{$user->pictures && $user->pictures['full'] ? '/' . $user->pictures['full'] : '/img/placeholders/person-160x160.png'}}">
                                <picture>
                                    <img alt="{{$user->name}}" class="rounded-full"
                                        src="{{$user->pictures && $user->pictures['full'] ? '/' . $user->pictures['full'] : '/img/placeholders/person-160x160.png'}}">
                                </picture>
                            </div>
                            <input type="file" id="picture" name="picture" class="file:sr-only text-sm">
                        </div>
                        <div class="flex-1 flex flex-col gap-3">
                            <x-forms.firstname-field :firstname="$user->firstname"/>
                            <x-forms.lastname-field :lastname="$user->lastname"/>
                        </div>
                    </div>
                    <x-forms.email-field :email="$user->email"/>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg text-blue-dark">{{__('forms.labels.gender')}}</p>
                        @error('gender')
                        <p class="font-medium text-red-600">{{$message}}</p>
                        @enderror
                        <div class="flex flex-col gap-2 justify-between sm:flex-row">
                            @foreach(__('forms.genders') as $value => $label)
                                <div class="flex gap-2">
                                    <input type="radio" id="{{$value}}" value="{{$value}}" name="gender"
                                           class="accent-orange" @checked(old('gender') ? $value === old('gender') : $value === auth()->user()->gender)>
                                    <label for="{{$value}}">{{$label}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <x-forms.tinymce-editor :name="'bio'" :trans="'forms.labels.bio'">{{old('bio') ?? htmlspecialchars_decode($user->bio)}}</x-forms.tinymce-editor>
                </div>
                <div class="flex gap-8 items-center justify-between">
                    <button type="submit"
                            class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transitionable">{{__('forms.buttons.edit_infos')}}
                    </button>
                </div>
            </form>
        </div>
        <div>
            <h3 class="font-semibold font-display text-xl">{{__('profile.edit.password_form_title')}}</h3>
            <form action="/{{app()->getLocale()}}/users/{{$user->slug}}/update-password" method="post"
                  class="flex flex-col gap-8">
                @csrf
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1">
                        <label for="old-password">
                            @if ($errors->has('old-password'))
                                <x-forms.error-label :label="'old-password'"/>
                            @else
                                <span class="text-lg text-blue-dark flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                 class="fill-blue-dark">
                <path
                    d="M12,8a2,2,0,0,0-2,2,2,2,0,0,0,1,1.72V15a1,1,0,0,0,2,0V11.72A2,2,0,0,0,14,10,2,2,0,0,0,12,8Zm0-6A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/>
            </svg>
            <span>{{__('forms.labels.old_password')}}</span>
            </span>
                            @endif
                        </label>
                        <div
                            class="@error('old-password') error-outline @enderror flex justify-between items-center px-3 bg-orange-light/20 border border-orange-light rounded-lg focus-within:outline focus-within:outline-1 focus-within:outline-orange transitionable">
                            <input type="password" id="old-password" name="old-password" dusk="old-password-field"
                                   class="password py-2 h-full w-full focus:outline-none font-mono font-lg bg-transparent">
                            <span class="show-password cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="20" height="20"
                             class="fill-orange">
                                <path class="show"
                                      d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                                <path class="hidden hide"
                                      d="M10.94,6.08A6.93,6.93,0,0,1,12,6c3.18,0,6.17,2.29,7.91,6a15.23,15.23,0,0,1-.9,1.64,1,1,0,0,0-.16.55,1,1,0,0,0,1.86.5,15.77,15.77,0,0,0,1.21-2.3,1,1,0,0,0,0-.79C19.9,6.91,16.1,4,12,4a7.77,7.77,0,0,0-1.4.12,1,1,0,1,0,.34,2ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.39,6.8a14.62,14.62,0,0,0-3.31,4.8,1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20a9.26,9.26,0,0,0,5.05-1.54l3.24,3.25a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6.36,9.19,2.45,2.45A1.81,1.81,0,0,1,12,14a2,2,0,0,1-2-2A1.81,1.81,0,0,1,10.07,11.48ZM12,18c-3.18,0-6.17-2.29-7.9-6A12.09,12.09,0,0,1,6.8,8.21L8.57,10A4,4,0,0,0,14,15.43L15.59,17A7.24,7.24,0,0,1,12,18Z"/>
                        </svg>
                    </span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="new-password">
                            @if ($errors->has('new-password'))
                                <x-forms.error-label :label="'new-password'"/>
                            @else
                                <span class="text-lg text-blue-dark flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                 class="fill-blue-dark">
                <path
                    d="M12,8a2,2,0,0,0-2,2,2,2,0,0,0,1,1.72V15a1,1,0,0,0,2,0V11.72A2,2,0,0,0,14,10,2,2,0,0,0,12,8Zm0-6A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/>
            </svg>
            <span>{{__('forms.labels.new_password')}}</span>
            </span>
                            @endif
                            <span
                                class="font-light text-sm">{{__('forms.labels.password_requirements')}}</span>
                        </label>
                        <div
                            class="@error('new-password') error-outline @enderror flex justify-between items-center px-3 bg-orange-light/20 border border-orange-light rounded-lg focus-within:outline focus-within:outline-1 focus-within:outline-orange transitionable">
                            <input type="password" id="new-password" name="new-password" dusk="new-password-field"
                                   class="password py-2 h-full w-full focus:outline-none font-mono font-lg bg-transparent">
                            <span class="show-password cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="20" height="20"
                             class="fill-orange">
                                <path class="show"
                                      d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                                <path class="hidden hide"
                                      d="M10.94,6.08A6.93,6.93,0,0,1,12,6c3.18,0,6.17,2.29,7.91,6a15.23,15.23,0,0,1-.9,1.64,1,1,0,0,0-.16.55,1,1,0,0,0,1.86.5,15.77,15.77,0,0,0,1.21-2.3,1,1,0,0,0,0-.79C19.9,6.91,16.1,4,12,4a7.77,7.77,0,0,0-1.4.12,1,1,0,1,0,.34,2ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.39,6.8a14.62,14.62,0,0,0-3.31,4.8,1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20a9.26,9.26,0,0,0,5.05-1.54l3.24,3.25a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6.36,9.19,2.45,2.45A1.81,1.81,0,0,1,12,14a2,2,0,0,1-2-2A1.81,1.81,0,0,1,10.07,11.48ZM12,18c-3.18,0-6.17-2.29-7.9-6A12.09,12.09,0,0,1,6.8,8.21L8.57,10A4,4,0,0,0,14,15.43L15.59,17A7.24,7.24,0,0,1,12,18Z"/>
                        </svg>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-8 items-center justify-between">
                    <button type="submit"
                            class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">{{__('forms.buttons.edit_password')}}
                    </button>
                    <a href="#" class="uppercase text-orange">{{__('forms.links.cancel')}}</a>
                </div>
            </form>
        </div>
        <div class="flex justify-between">
            <a href="/logout" class="uppercase text-orange">{{__('forms.links.logout')}}</a>
            <a href="/{{$user->slug}}/delete" class="uppercase text-red-800">{{__('forms.links.delete_account')}}</a>
        </div>
    </section>
</main>
<x-footer/>
</body>
</html>

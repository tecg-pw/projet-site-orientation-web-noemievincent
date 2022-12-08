<x-header :head_title="'auth.register.head_title'"/>
<main class="px-10 flex-1 xl:mx-96 mt-12">
    <section aria-labelledby="register" class="col-start-2">
        <div class="mb-8">
            <h2 id="register"
                class="uppercase font-display font-bold text-4xl text-blue">{{__('auth.register.title')}}</h2>
            <p>{{__('auth.register.tagline')}}</p>
        </div>
        <form action="/register" method="post" class="flex flex-col gap-4">
            @csrf
            <div class="flex justify-between gap-3">
                <fieldset class="flex flex-col gap-1 w-full">
                    <label for="firstname" class="text-lg text-blue-dark flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                             class="fill-blue-dark">
                            <path
                                d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
                        </svg>
                        <span>{{__('forms.labels.firstname')}}</span>
                    </label>
                    <input type="text" id="firstname" placeholder="Pierre" name="firstname" dusk="firstname-field"
                           class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                </fieldset>
                <fieldset class="flex flex-col gap-1 w-full">
                    <label for="lastname" class="text-lg text-blue-dark flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                             class="fill-blue-dark">
                            <path
                                d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
                        </svg>
                        <span>{{__('forms.labels.lastname')}}</span>
                    </label>
                    <input type="text" id="lastname" placeholder="Dumont" name="lastname" dusk="lastname-field"
                           class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                </fieldset>
            </div>
            <x-email-field/>
            <x-password-field/>
            <div class="flex justify-between gap-16 items-center mt-6">
                {!! __('auth.register.login_link', ['locale' => app()->getLocale()]) !!}
                <button type="submit" dusk="submit-credentials"
                        class="uppercase font-light bg-orange text-white py-2 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                    {{__('forms.buttons.register')}}
                </button>
            </div>
        </form>
    </section>
</main>
<x-footer/>
</body>
</html>

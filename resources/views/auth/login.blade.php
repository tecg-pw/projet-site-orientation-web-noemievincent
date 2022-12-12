<x-header :head_title="'auth.login.head_title'"/>
<main class="px-10 flex-1 xl:mx-96 mt-12">
    <section aria-labelledby="login" class="col-start-2">
        <h2 id="login" class="uppercase font-display font-bold text-4xl text-blue mb-8">{{__('auth.login.title')}}</h2>
        <form action="/login" method="post" class="flex flex-col gap-4">
            @csrf
            <x-email-field/>
            <x-password-field/>
            <div class="flex justify-between items-center font-light text-sm">
                <div class="flex gap-2 items-center">
                    <input type="checkbox" id="remember" value="{{__('forms.labels.remember_me')}}"
                           class="accent-orange">
                    <label for="remember">{{__('forms.labels.remember_me')}}</label>
                </div>
                <a href="/{{app()->getLocale()}}/reset-password"
                   class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">{{__('forms.links.reset_password')}}</a>
            </div>
            <div class="flex justify-between gap-16 items-center mt-6">
                {!! __('auth.login.register_link', ['locale' => app()->getLocale()]) !!}
                <button type="submit" dusk="submit-credentials"
                        class="uppercase font-light bg-orange text-white py-2 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                    {{__('forms.buttons.login')}}
                </button>
            </div>
        </form>
    </section>
</main>
<x-footer/>
</body>
</html>

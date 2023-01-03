<x-header :head_title="'auth.reset_password.head_title'"/>
<main class="main xl:mx-64">
    <section aria-labelledby="reset_password" class="col-start-2">
        <h2 id="reset_password" class="h2">{{__('auth.reset_password.title')}}</h2>
        <form action="/{{app()->getLocale()}}/reset-password" method="post" class="flex flex-col gap-4">
            @csrf
            <x-forms.email-field/>
            <x-forms.password-field/>
            <input type="hidden" name="token" value="{{$token}}">
            <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:justify-between sm:gap-16 sm:items-center">
                <button type="submit" dusk="submit-credentials"
                        class="uppercase font-light bg-orange text-white py-2 px-6 rounded-lg hover:bg-orange-dark transitionable">
                    {{__('forms.buttons.reset_password')}}
                </button>
            </div>
        </form>
    </section>
</main>
<x-footer/>
</body>
</html>

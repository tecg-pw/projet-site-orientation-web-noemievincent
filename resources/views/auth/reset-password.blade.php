<x-header/>
<main class="px-10 flex-1 mx-96 mt-12">
    <section aria-labelledby="reset-password" class="col-start-2">
        <div class="mb-8">
            <h2 id="reset-password" class="uppercase font-display font-bold text-4xl text-blue">{{__('Mot de passe oublié ?')}}</h2>
            <p>Veuillez saisir votre adresse email ci-dessous. Vous recevrez un lien pour réinitialiser votre mot de passe.</p>
        </div>
        <form action="/reset-password" method="post" class="flex flex-col gap-4 mb-12">
            @csrf
            <fieldset class="flex flex-col gap-1">
                <label for="email" class="text-lg text-blue-dark flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                         class="fill-none stroke-blue-dark stroke-2">
                        <g stroke-linecap="round" stroke-linejoin="round" transform="translate(0 1)">
                            <circle cx="11" cy="10" r="4"/>
                            <path d="M15 10v1a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"/>
                        </g>
                    </svg>
                    <span>{{__('Adresse e-mail')}}</span>
                </label>
                <input type="email" id="email" placeholder="name@example.com"
                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
            </fieldset>
            <button type="submit"
                    class="uppercase font-light bg-orange text-white py-2 self-start px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                {{__('Réinitialiser mon mot de passe')}}
            </button>
        </form>
        <a href="/login" class="flex items-center self-end gap-2 text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="20" class="fill-orange h-full">
                <g>
                    <rect width="24" height="24" opacity="0" transform="rotate(90 12 12)"/>
                    <path
                        d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"/>
                </g>
            </svg>
            <span>{{__('Retourner sur la page de connexion')}}</span>
        </a>
    </section>
</main>
<x-footer/>
</body>
</html>

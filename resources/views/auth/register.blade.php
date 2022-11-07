<x-header/>
<main class="px-10 flex-1 mx-96 mt-12">
    <section aria-labelledby="register" class="col-start-2">
        <div class="mb-8">
            <h2 id="register" class="uppercase font-display font-bold text-4xl text-blue">{{__('Inscription')}}</h2>
            <p>Nulla officia magna ullamco id irure aute aliqua dolore qui duis.</p>
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
                        <span>{{__('Prénom')}}</span>
                    </label>
                    <input type="text" id="firstname" placeholder="Pierre"
                           class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                </fieldset>
                <fieldset class="flex flex-col gap-1 w-full">
                    <label for="lastname" class="text-lg text-blue-dark flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                             class="fill-blue-dark">
                             <path
                                 d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
                        </svg>
                        <span>{{__('Nom')}}</span>
                    </label>
                    <input type="text" id="lastname" placeholder="Dumont"
                           class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                </fieldset>
            </div>
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
            <fieldset class="flex flex-col gap-1">
                <label for="password" class="">
                    <span class="text-lg text-blue-dark flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                             class="fill-blue-dark">
                            <path
                                d="M12,8a2,2,0,0,0-2,2,2,2,0,0,0,1,1.72V15a1,1,0,0,0,2,0V11.72A2,2,0,0,0,14,10,2,2,0,0,0,12,8Zm0-6A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/>
                        </svg>
                        <span>{{__('Mot de passe')}}</span>
                    </span>
                    <span class="font-light text-sm">{{__('Entre 8 et 64 caractères, avec 1 majuscule et 1 minuscule')}}</span>
                </label>
                <div class="flex justify-between items-center px-3 border border-orange-light rounded-lg focus-within:outline focus-within:outline-1 focus-within:outline-orange">
                    <input type="password" id="password" name="password"
                           class="password py-2 h-full w-full placeholder:font-light focus:outline-none  font-mono font-lig">
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
            </fieldset>
            <div class="flex justify-between gap-16 items-center mt-6">
                <p class="text-sm font-light">{{__('Déjà un compte ?')}} <a href="/login"
                                                                                  class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">{{__('Connectez-vous')}}</a></p>
                <button type="submit"
                        class="uppercase font-light bg-orange text-white py-2 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                    {{__('Créer mon compte')}}
                </button>
            </div>
        </form>
    </section>
</main>
<x-footer/>
</body>
</html>

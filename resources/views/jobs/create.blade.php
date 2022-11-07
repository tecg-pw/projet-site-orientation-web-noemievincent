<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="jobs" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="jobs"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Proposer un stage')}}</h2>
                <p class="text-lg ">{{__('Les entreprises s’adressent souvent à nous afin de proposer des stages à nos étudiants en dernière année. Au fil du temps, un réseau s’est créé au sein de notre section.')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-12 col-span-2">
                    <a href="/jobs/offers"
                       class="uppercase text-lg text-orange underline">{{__('Offres de stages')}}</a>
                    <a href="/jobs/partners"
                       class="uppercase text-lg text-orange underline">{{__('Entreprises partenaires')}}</a>
                    <a href="/jobs/create"
                       class="uppercase text-lg text-orange underline font-bold">{{__('Proposer un stage')}}</a>
                </div>
                <p class="text-lg">{{__('Vous êtes une entreprise en recherche de stagiaires ? Publiez directement votre proposition sur ce site et les candidatures seront garanties.')}}</p>
                <form action="/jobs/create" method="post" class="flex flex-col gap-6">
                    @csrf
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('Informations de l‘entreprise')}}</h3>
                        <div class="flex justify-between gap-6">
                            <fieldset class="flex flex-col gap-1 w-full">
                                <label for="company-logo" class="text-lg text-blue-dark flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18"
                                         class="fill-blue-dark">
                                        <path
                                            d="M8.71,7.71,11,5.41V15a1,1,0,0,0,2,0V5.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4-4a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4A1,1,0,1,0,8.71,7.71ZM21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13a1,1,0,0,0-2,0v6a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12Z"/>
                                    </svg>
                                    <span>{{__('Logo de votre enteprise')}}</span>
                                </label>
                                <input type="file" id="company-logo" name="company-logo"
                                       class="py-2 file:border file:border-solid file:border-orange file:rounded-lg file:bg-white file:px-3 file:py-1 file:text-blue file:hover:bg-orange file:cursor-pointer file:hover:text-white file:transition-all file:ease-in-out file:duration-200">
                            </fieldset>
                            <fieldset class="flex flex-col gap-1 w-full">
                                <label for="name" class="text-lg text-blue-dark flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                                         class="fill-blue-dark">
                                        <path
                                            d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
                                    </svg>
                                    <span>{{__('Nom de votre entreprise')}}</span>
                                </label>
                                <input type="text" id="name" placeholder="White Cube"
                                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                            </fieldset>
                            <fieldset class="flex flex-col gap-1 w-full">
                                <label for="website" class="text-lg text-blue-dark flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                                         class="fill-blue-dark">
                                        <path
                                            d="M21.41,8.64s0,0,0-.05a10,10,0,0,0-18.78,0s0,0,0,.05a9.86,9.86,0,0,0,0,6.72s0,0,0,.05a10,10,0,0,0,18.78,0s0,0,0-.05a9.86,9.86,0,0,0,0-6.72ZM4.26,14a7.82,7.82,0,0,1,0-4H6.12a16.73,16.73,0,0,0,0,4Zm.82,2h1.4a12.15,12.15,0,0,0,1,2.57A8,8,0,0,1,5.08,16Zm1.4-8H5.08A8,8,0,0,1,7.45,5.43,12.15,12.15,0,0,0,6.48,8ZM11,19.7A6.34,6.34,0,0,1,8.57,16H11ZM11,14H8.14a14.36,14.36,0,0,1,0-4H11Zm0-6H8.57A6.34,6.34,0,0,1,11,4.3Zm7.92,0h-1.4a12.15,12.15,0,0,0-1-2.57A8,8,0,0,1,18.92,8ZM13,4.3A6.34,6.34,0,0,1,15.43,8H13Zm0,15.4V16h2.43A6.34,6.34,0,0,1,13,19.7ZM15.86,14H13V10h2.86a14.36,14.36,0,0,1,0,4Zm.69,4.57a12.15,12.15,0,0,0,1-2.57h1.4A8,8,0,0,1,16.55,18.57ZM19.74,14H17.88A16.16,16.16,0,0,0,18,12a16.28,16.28,0,0,0-.12-2h1.86a7.82,7.82,0,0,1,0,4Z"/>
                                    </svg>
                                    <span>{{__('Votre site web')}}</span>
                                </label>
                                <input type="text" id="website" placeholder="whitecube.be"
                                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                            </fieldset>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('Vos informations')}}</h3>
                        <div class="grid grid-cols-3 gap-6">
                            <fieldset class="flex flex-col gap-1 w-full">
                                <label for="full-name" class="text-lg text-blue-dark flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                                         class="fill-blue-dark">
                                        <path
                                            d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
                                    </svg>
                                    <span>{{__('Nom et prénom')}}</span>
                                </label>
                                <input type="text" id="full-name" placeholder="Jonathan Prevost"
                                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                            </fieldset>
                            <fieldset class="flex flex-col gap-1 col-span-2">
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
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('Description de l‘offre')}}</h3>
                        <div class="flex flex-col gap-2">
                            <fieldset class="flex flex-col gap-2">
                                <label for="title" class="text-lg">{{__('Titre de l‘offre')}}</label>
                                <input type="text" id="title"
                                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                            </fieldset>
                            <fieldset class="flex flex-col gap-2">
                                <label for="desc" class="text-lg ">{{__('Description et missions du stage')}}</label>
                                <textarea name="desc" id="desc" cols="30" rows="10"
                                          class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200"></textarea>
                            </fieldset>
                            <div>
                                <fieldset class="flex flex-col gap-2">
                                    <label for="desc" class="text-lg ">{{__('Compétences nécessaires')}}</label>
                                    <div>
                                        @for($i = 1; $i < 8; $i++)
                                            <fieldset class="flex gap-2 items-center">
                                                <input type="checkbox" id="compétence-{{$i}}" value="compétence {{$i}}"
                                                       class="accent-orange">
                                                <label for="compétence-{{$i}}">Compétence {{$i}}</label>
                                            </fieldset>
                                        @endfor
                                    </div>
                                </fieldset>
                                <div>
                                    <p>{{__('Autres')}} :</p>
                                    à faire
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('Convention de stage')}}</h3>
                        <div class="flex justify-between gap-6">
                            <fieldset class="flex flex-col gap-1 w-full">
                                <label for="date" class="text-lg text-blue-dark flex items-center gap-2">
                                    <span>{{__('Date du stage')}}</span>
                                </label>
                                <input type="date" id="date"
                                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                            </fieldset>
                            <fieldset class="flex flex-col gap-1 w-full">
                                <label for="duration" class="text-lg text-blue-dark flex items-center gap-2">
                                    <span>{{__('Durée du stage')}}</span>
                                </label>
                                <input type="text" id="duration" placeholder="12 semaines"
                                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                            </fieldset>
                            <fieldset class="flex flex-col gap-1 w-full">
                                <label for="location" class="text-lg text-blue-dark flex items-center gap-2">
                                    <span>{{__('Lieu du stage')}}</span>
                                </label>
                                <input type="text" id="location" placeholder="Liège"
                                       class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                            </fieldset>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('Mode des réception des candidatures')}}</h3>
                        <fieldset class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <div class="radio-btn--parent flex gap-3 items-center">
                                    <input type="radio" id="email-reception" name="reception-mode" value="email"
                                           class="radio-btn accent-orange">
                                    <label for="email-reception" class="flex gap-2 items-center">
                                        <span>{{__('Par email')}}</span>
                                        <span
                                            class="text-sm font-light">{{__('(Vous recevrez les informations du candidat directement par e-mail)')}}</span>
                                    </label>
                                </div>
                                <div class="input-field ml-6 grid grid-cols-3">
                                    <label for="applications-email" class="sr-only">{{__('Adresse e-mail')}}</label>
                                    <input type="email" id="applications-email" name="applications-email"
                                           class="pl-3 py-2 col-span-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex gap-3 items-center">
                                    <input type="radio" id="url-reception" name="reception-mode" value="url"
                                           class="accent-orange">
                                    <label for="url-reception" class="flex gap-2 items-center">
                                        <span>{{__('Redirection sur une page de votre site')}}</span>
                                        <span
                                            class="text-sm font-light">{{__('(La candidature se fera directement sur votre site)')}}</span>
                                    </label>
                                </div>
                                <div class="ml-6 grid grid-cols-3">
                                    <label for="applications-url" class="sr-only">{{__('Adresse e-mail')}}</label>
                                    <input type="text" id="applications-url" name="applications-url"
                                           class="pl-3 py-2 col-span-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="flex flex-col gap-3">
                        <button type="submit"
                                class="self-start uppercase font-light bg-orange text-white py-3 px-12 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                            {{__('Envoyer mon offre de stage')}}
                        </button>
                        <p class="font-light text-sm">{{__('Avant d’être publiée, votre offre sera vérifiée par un administrateur.')}}</p>
                    </div>
                </form>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>

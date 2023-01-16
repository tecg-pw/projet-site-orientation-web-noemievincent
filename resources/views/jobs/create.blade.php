<x-header :head_title="'jobs.create.head_title'"/>
<main class="main">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="jobs" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="jobs"
                    class="h2">{{__('jobs.create.title')}}</h2>
                <p class="text-lg ">{{__('jobs.tagline')}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class=" col-span-2 flex flex-col gap-2 md:flex-row md:gap-12">
                    <a href="/{{app()->getLocale()}}/jobs/offers"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.offers')}}</a>
                    <a href="/{{app()->getLocale()}}/jobs/partners"
                       class="uppercase text-lg text-orange underline">{{__('jobs.tabs.partners')}}</a>
                    <a href="/{{app()->getLocale()}}/jobs/offers/create"
                       class="uppercase text-lg text-orange font-bold">{{__('jobs.tabs.create')}}</a>
                </div>
                <p class="text-lg">{{__('jobs.create.form.tagline')}}</p>
                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
                <form action="/{{app()->getLocale()}}/jobs/offers/create" method="post" class="flex flex-col gap-6" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('jobs.create.form.company.title')}}</h3>
                        <div class="flex flex-col justify-between gap-2 lg:flex-row lg:justify-start lg:gap-6">
                            <div class="flex flex-col gap-1">
                                <label for="company-logo" class="text-lg text-blue-dark flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18"
                                         class="fill-blue-dark">
                                        <path
                                            d="M8.71,7.71,11,5.41V15a1,1,0,0,0,2,0V5.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4-4a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4A1,1,0,1,0,8.71,7.71ZM21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13a1,1,0,0,0-2,0v6a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12Z"/>
                                    </svg>
                                    <span>{{__('jobs.create.form.company.labels.logo')}}</span>
                                </label>
                                <input type="file" id="company-logo" name="company_logo"
                                       class="py-2 file:border file:border-solid file:border-orange file:rounded-lg file:bg-orange-light/20 file:px-3 file:py-1 file:text-blue file:hover:bg-orange file:cursor-pointer file:hover:text-white file:transition-all file:ease-in-out file:duration-200">
                            </div>
                            <div class="flex flex-col flex-1 justify-between gap-2 md:flex-row md:gap-6">
                                <div class="flex flex-col gap-1 w-full">
                                    <label for="company-name" class="text-lg text-blue-dark flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18"
                                             height="18"
                                             class="fill-blue-dark">
                                            <path
                                                d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
                                        </svg>
                                        <span>{{__('jobs.create.form.company.labels.company-name')}}</span>
                                    </label>
                                    <input type="text" id="company-name" name="company_name" value="{{old('company-name')}}"
                                           class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                                </div>
                                <div class="flex flex-col gap-1 w-full">
                                    <label for="website" class="text-lg text-blue-dark flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18"
                                             height="18"
                                             class="fill-blue-dark">
                                            <path
                                                d="M21.41,8.64s0,0,0-.05a10,10,0,0,0-18.78,0s0,0,0,.05a9.86,9.86,0,0,0,0,6.72s0,0,0,.05a10,10,0,0,0,18.78,0s0,0,0-.05a9.86,9.86,0,0,0,0-6.72ZM4.26,14a7.82,7.82,0,0,1,0-4H6.12a16.73,16.73,0,0,0,0,4Zm.82,2h1.4a12.15,12.15,0,0,0,1,2.57A8,8,0,0,1,5.08,16Zm1.4-8H5.08A8,8,0,0,1,7.45,5.43,12.15,12.15,0,0,0,6.48,8ZM11,19.7A6.34,6.34,0,0,1,8.57,16H11ZM11,14H8.14a14.36,14.36,0,0,1,0-4H11Zm0-6H8.57A6.34,6.34,0,0,1,11,4.3Zm7.92,0h-1.4a12.15,12.15,0,0,0-1-2.57A8,8,0,0,1,18.92,8ZM13,4.3A6.34,6.34,0,0,1,15.43,8H13Zm0,15.4V16h2.43A6.34,6.34,0,0,1,13,19.7ZM15.86,14H13V10h2.86a14.36,14.36,0,0,1,0,4Zm.69,4.57a12.15,12.15,0,0,0,1-2.57h1.4A8,8,0,0,1,16.55,18.57ZM19.74,14H17.88A16.16,16.16,0,0,0,18,12a16.28,16.28,0,0,0-.12-2h1.86a7.82,7.82,0,0,1,0,4Z"/>
                                        </svg>
                                        <span>{{__('jobs.create.form.company.labels.website')}}</span>
                                    </label>
                                    <input type="text" id="website" name="website" value="{{old('website')}}"
                                           class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('jobs.create.form.informations.title')}}</h3>
                        <div class="flex flex-col gap-2 md:grid md:grid-cols-3 md:gap-6">
                            <div class="flex flex-col gap-1 w-full">
                                <label for="contact-name" class="text-lg text-blue-dark flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                                         class="fill-blue-dark">
                                        <path
                                            d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/>
                                    </svg>
                                    <span>{{__('jobs.create.form.informations.labels.name')}}</span>
                                </label>
                                <input type="text" id="contact-name" name="contact_name" value="{{old('contact-name')}}"
                                       class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                            </div>
                            <div class="flex flex-col gap-1 col-span-2">
                                <label for="contact-email" class="text-lg text-blue-dark flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="18" height="18"
                                         class="fill-none stroke-blue-dark stroke-2">
                                        <g stroke-linecap="round" stroke-linejoin="round" transform="translate(0 1)">
                                            <circle cx="11" cy="10" r="4"/>
                                            <path d="M15 10v1a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"/>
                                        </g>
                                    </svg>
                                    <span>{{__('jobs.create.form.informations.labels.email')}}</span>
                                </label>
                                <input type="email" id="contact-email" name="contact_email" value="{{old('contact-email')}}"
                                       class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('jobs.create.form.offer.title')}}</h3>
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-col gap-2">
                                <label for="title" class="text-lg">{{__('jobs.create.form.offer.labels.title')}}</label>
                                <input type="text" id="title" name="title" value="{{old('title')}}"
                                       class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="description"
                                       class="text-lg ">{{__('jobs.create.form.offer.labels.body')}}</label>
                                <textarea name="description" id="description" cols="30" rows="10"
                                          class="pl-2 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">{{old('description')}}</textarea>
                            </div>
                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-lg ">{{__('jobs.create.form.offer.labels.skills')}}</p>
                                    <div class="flex gap-20">
                                        <div>
                                            @foreach($skills as $skill)
                                                <div class="flex gap-2 items-center">
                                                    <input type="checkbox" id="{{$skill->slug}}"
                                                           value="{{$skill->slug}}" @if(old('skills')) @checked(in_array($skill->slug, old('skills'))) @endif
                                                           class="accent-orange" name="skills[]">
                                                    <label for="{{$skill->slug}}">{{$skill->name}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="flex-1 flex flex-col gap-3">
                                            <label for="add_skill" class="flex flex-col">
                                                <span>
                                                    {{__('jobs.create.form.offer.labels.other_skills')}}
                                                </span>
                                                <span class="font-light text-sm">
                                                    {{__('jobs.create.form.offer.labels.add_skills_hint')}}
                                                </span></label>
                                            <textarea id="add_skill" name="add_skill" rows="5"
                                                      class="pl-2 py-1 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">{{old('add-skill')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('jobs.create.form.contract.title')}}</h3>
                        <div class="flex flex-col justify-between gap-2 md:flex-row md:gap-6">
                            <div class="flex flex-col gap-1 w-full">
                                <label for="start_date" class="text-lg text-blue-dark flex items-center gap-2">
                                    <span>{{__('jobs.create.form.contract.labels.date')}}</span>
                                </label>
                                <input type="date" id="start_date" name="start_date" value="{{old('date')}}"
                                       class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label for="duration" class="text-lg text-blue-dark flex items-center gap-2">
                                    <span>{{__('jobs.create.form.contract.labels.duration')}}</span>
                                </label>
                                <input type="text" id="duration" name="duration" value="{{old('duration')}}"
                                       class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label for="location" class="text-lg text-blue-dark flex items-center gap-2">
                                    <span>{{__('jobs.create.form.contract.labels.location')}}</span>
                                </label>
                                <input type="text" id="location" name="location" value="{{old('location')}}"
                                       class="pl-3 py-2 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold font-display text-xl">{{__('jobs.create.form.reception_mode.title')}}</h3>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <div class="radio-btn--parent flex gap-3 items-center">
                                    <input type="radio" id="email-reception" name="reception_mode" value="email"
                                           class="radio-btn accent-orange" @checked(old('reception_mode') === 'email')>
                                    <label for="email-reception"
                                           class="flex flex-col md:gap-2 md:flex-row md:items-center">
                                        <span>{{__('jobs.create.form.reception_mode.labels.email')}}</span>
                                        <span
                                            class="text-sm font-light">{{__('jobs.create.form.reception_mode.taglines.email')}}</span>
                                    </label>
                                </div>
                                <div class="input-field ml-6 md:grid md:grid-cols-3">
                                    <label for="applications-email"
                                           class="sr-only">{{__('jobs.create.form.reception_mode.inputs.email')}}</label>
                                    <input type="text" id="applications-email" name="applications_email" value="{{old('applications_email')}}"
                                           class="w-full pl-3 py-2 md:col-span-3 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex gap-3 items-center">
                                    <input type="radio" id="url-reception" name="reception_mode" value="url"
                                           class="accent-orange" @checked(old('reception_mode') === 'url')>
                                    <label for="url-reception"
                                           class="flex flex-col md:gap-2 md:flex-row md:items-center">
                                        <span>{{__('jobs.create.form.reception_mode.labels.url')}}</span>
                                        <span
                                            class="text-sm font-light">{{__('jobs.create.form.reception_mode.taglines.url')}}</span>
                                    </label>
                                </div>
                                <div class="ml-6 md:grid md:grid-cols-3">
                                    <label for="applications-url"
                                           class="sr-only">{{__('jobs.create.form.reception_mode.inputs.url')}}</label>
                                    <input type="text" id="applications-url" name="applications_url" value="{{old('applications_url')}}"
                                           class="w-full pl-3 py-2 md:col-span-3 bg-orange-light/20 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange transition ease-in-out duration-200">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <button type="submit"
                                class="md:self-start uppercase font-light bg-orange text-white py-3 px-12 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                            {{__('jobs.create.form.button')}}
                        </button>
                        <p class="font-light text-sm">{{__('jobs.create.form.warning')}}</p>
                    </div>
                </form>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

<x-header :head_title="'forum.create.head_title'"/>
<main class="main">
    <div class="xl:grid xl:grid-cols-4 xl:gap-10">
        <section aria-labelledby="forum" class="flex flex-col gap-8 lg:col-span-3">
            <div class="flex flex-col gap-2">
                <h2 id="forum"
                    class="h2">{{__('forum.create.title')}}</h2>
                {!! __('forum.tagline') !!}
            </div>
            <div class="flex flex-col">
                {!! __('forum.profile_link') !!}
            </div>
            @auth()
                <div class="flex flex-col gap-6">
                    <form action="/{{app()->getLocale()}}/forum/create" method="post" class="flex flex-col gap-4">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <label for="title" class="text-lg text-blue-dark">
                                @if ($errors->has('title'))
                                    <x-forms.error-label :label="'title'"/>
                                @else
                                    {{__('forms.labels.title')}}
                                @endif
                            </label>
                            <input type="text" id="title" name="title" value="{{old('title')}}"
                                   class="@error('title') error-outline @enderror pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="body" class="text-lg text-blue-dark">
                                @if ($errors->has('body'))
                                    <x-forms.error-label :label="'body'"/>
                                @else
                                    {{__('forms.labels.message')}}
                                @endif
                            </label>
                            <textarea name="body" id="body" cols="30" rows="10"
                                      class="@error('body') error-outline @enderror pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200">{{old('body')}}</textarea>
                        </div>
                        <div class="flex gap-2">
                            <label for="category_id" class="text-lg text-blue-dark">
                                @if ($errors->has('category'))
                                    <x-forms.error-label :label="'category'"/>
                                @else
                                    {{__('forms.labels.category')}}
                                @endif
                            </label>
                            <select name="category_id" id="category_id" class="rounded-lg px-4">
                                @foreach($categories as $category)
                                    <option value="{{$category->category_id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex gap-14 items-center justify-end">
                            <a href="/{{app()->getLocale()}}/forum"
                               class="uppercase text-orange">{{__('forms.links.cancel')}}</a>
                            <button type="submit"
                                    class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transitionable">{{__('forms.buttons.post_question')}}
                            </button>
                        </div>
                    </form>
                </div>
            @endauth
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>

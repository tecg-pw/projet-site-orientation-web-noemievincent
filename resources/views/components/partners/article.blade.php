@props(['partner'])
<article aria-labelledby="{{$partner->slug}}" itemscope itemtype="https://schema.org/Corporation"
         class="bg-white rounded-2xl border border-blue/20 hover:bg-blue-card transition ease-in-out duration-200 w-full">
    <div class="relative">
        <a href="/jobs/partners/{{$partner->slug}}" class="full-link">{{$partner->name}}</a>
        <div>
            <div class="p-3 flex flex-col gap-3">
                <div class="flex gap-3">
                    <img src="https://placehold.jp/60x60.png" alt="" class="rounded-full" itemprop="logo">
                    <h3 id="{{$partner->slug}}" class="text-xl uppercase" itemprop="name">{{$partner->name}}</h3>
                </div>
                <div class="font-light flex flex-col text-sm" itemscope itemtype="https://schema.org/PostalAddress"
                     itemprop="location">
                    <p><span itemprop="streetAddress">{{$partner->streetAddress}}</span></p>
                    <p><span itemprop="postalCode">{{$partner->postalCode}}</span> <span
                            itemprop="addressLocality">{{$partner->addressLocality}}</span></p>
                </div>
            </div>
        </div>
    </div>
</article>

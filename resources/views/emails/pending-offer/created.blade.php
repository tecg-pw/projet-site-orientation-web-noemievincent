<x-mail::message>
# {{__('emails.pending_offer_created.subject')}}
{{__('emails.pending_offer_created.greetings')}}<br>
{{__('emails.pending_offer_created.body')}}

#### Informations de l'entreprise :
**Nom de votre entreprise :** {{$offer->company_name}}<br>
**Votre site web :** {{$offer->website}}

#### Description de l'offre :
##### {{$offer->title}}<br>
{{$offer->description}}

#### Compétences :
<ul>
@foreach(json_decode($offer->skills) as $skill)
<li>{{$skill}}</li>
@endforeach
</ul>
<ul>
@foreach(json_decode($offer->add_skill) as $skill)
<li>{{$skill}}</li>
@endforeach
</ul>

#### Convention de stage :
**Date de début :** {{$offer->start_date->translatedFormat('d F Y')}}<br>
**Durée :** {{$offer->duration}}<br>
**Location :** {{$offer->location}}

#### Mode de réception des candidatures :
{{__('jobs.create.form.reception_mode.labels.' . $offer->reception_mode)}} via {{$offer->applications_link}}

{{__('emails.closure')}}<br>
{{ config('app.name') }}
</x-mail::message>

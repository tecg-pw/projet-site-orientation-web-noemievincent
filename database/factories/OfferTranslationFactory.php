<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\OfferTranslation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<OfferTranslation>
 */
class OfferTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();
        $ids = Offer::pluck('id');

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => '<p>' . implode('</p><p>', fake()->paragraphs(12)) . '</p>',
            'skills' => json_encode(['HTML', 'CSS', 'Javascript']),
            'start_date' => Carbon::parse(fake()->dateTime)->toDateString(),
            'duration' => fake()->numberBetween(3, 15) . ' semaines',
            'location' => fake()->city(),
            'method' => '',
            'method_link' => '',
            'contact_name' => '',
            'contact_email' => '',
            'published_at' => Carbon::now()->toDateString(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'offer_id' => $ids->random(),
        ];
    }
}

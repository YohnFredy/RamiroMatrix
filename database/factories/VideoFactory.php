<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generamos un nombre y su correspondiente slug
        $name = $this->faker->sentence(4);
        $slug = Str::slug($name, '-');

        // Una lista de IDs reales de YouTube para que los videos funcionen
        $youtubeIds = [
            'rKswqBXD8qU',
            'fhD_xVcJSHY',
            'w4vOcCFwZVQ',
            'hn3wJ1_1Zsg',
            '8SbUC-UaAxE',
            'dQw4w9WgXcQ',
            'kJQP7kiw5Fk',
            '3JZ_D3ELwOQ',
            'lTRiuFIWV54',
            'FzBTQXXkGAc',
            'ULTtWUZhD9c',
            'BboMpayJomw',
            'tXlQzxZSrpU',
            'kPa7bsKwL-c',
        ];

        return [
            'name' => $name,
            'short_description' => $this->faker->paragraph(2),
            'slug' => $slug,
            'image_path' => null, // Dejamos la imagen nula por ahora
            'youtube_url' => $this->faker->randomElement($youtubeIds), // Elige un ID al azar
        ];
    }
}

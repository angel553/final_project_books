<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;

    public function definition()
    {
        return [
            //'user_id' => factory(App\User::class);
            'user_id' => User::factory(),
            'titulo' => $this->faker->sentence(2),
            'autor' => $this->faker->name(),
            'editorial' => $this->faker->sentence(2),
            'isbn' => $this->faker->ean13(),
            'paginas' => $this->faker->numberBetween(0, 100),
            'fecha' => $this->faker->date('Y_m_d'),
            'precio' => $this->faker->numberBetween(0, 500),
            'book_image' => $this->faker->sentence(),
            'route_image' => $this->faker->image('public/storage/images', 640, 480),
        ];
    }
}

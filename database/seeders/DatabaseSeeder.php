<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([PostSeeder::class, TestimonialSeeder::class]);
        Post::factory(100)->create();
        Testimonial::factory(100)->create();
    }
}

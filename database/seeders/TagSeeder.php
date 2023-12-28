<?php

namespace Database\Seeders;

use App\Models\Admin\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();
        // for($i=0; $i <= ; $i++){
        //     $tag = new Tag;
        //     $tag->name = $faker->word;
        //     $tag->slug = Str::slug($faker->name, '-');
        //     $tag->description = $faker->sentence;
        //     $tag->save();
        // }

    }
}

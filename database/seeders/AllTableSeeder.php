<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Sosmed;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AllTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default user
        User::create([
            "name" => "Ahmad Shobirin",
            "email" => "ahmadshobirin.dev@gmail.com",
            "password" => bcrypt("deweloper987"),
            "about" => "Including the retainer in the Deweloper team to achieve dreams",
            "picture" => "https://avatars3.githubusercontent.com/u/27719456?s=400&u=81df4dc4dc68726a97ae2b36c0a832b8cadc6e43&v=1",
        ]);

        // Default Category
        Category::insert([
            [
                "id" => Str::uuid(),
                "name" => "blog",
                "slug" => Str::slug("blog"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => Str::uuid(),
                "name" => "poem",
                "slug" => Str::slug("poem"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);

        // Default Sosmed
        Sosmed::insert([
            [
                "id"         => Str::uuid(),
                "name"       => "github",
                "link"       => "#",
                "status"     => true,
                "created_at" => now(),
            ],
            [
                "id"         => Str::uuid(),
                "name"       => "linkedin",
                "link"       => "#",
                "status"     => true,
                "created_at" => now(),
            ],
            [
                "id"         => Str::uuid(),
                "name"       => "twitter",
                "link"       => "#",
                "status"     => true,
                "created_at" => now(),
            ],
        ]);
    }
}

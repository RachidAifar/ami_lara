<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Volume;
use Illuminate\Database\Seeder;

class VolumeArticlesSeeder extends Seeder
{
    public function run(): void
    {
        Article::all()->each(function (Article $article) {
            $article->volumes()->attach(Volume::random());
            $article->save();
        });
    }
}

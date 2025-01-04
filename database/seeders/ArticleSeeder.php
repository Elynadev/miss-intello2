<?php
namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::factory(5)->create();

        Article::factory(20)->create()->each(function ($article) use ($categories) {
            $article->category_id = $categories->random()->id;
            $article->save();
        });
    }
}

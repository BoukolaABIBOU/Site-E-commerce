<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    protected $categories = [
        'Romans',
        'Mangas',
        'Livres scolaires',
        'Livres de voyage',
        'Bandes dessinés',
        'Livres pour enfant',
        'Loisirs-Nature-Voyage',
        'Livres sciences humaines',
        'Livres pour ados',
        'Livres universitaires'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category)
        {
            \App\Category::create([
               'name' => $category
            ]);
        }
    }
}

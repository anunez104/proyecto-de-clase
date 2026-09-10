<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Runner\Baseline\CannotWriteBaselineException;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      
        $category1 = new Category();
        $category1->name = 'Tecnologia';
        $category1->description = '´roductos Tecnologicos';

        $category1->save();

        Category::factory(1000)->create();

        Product::factory(100)->create();
        
    }
}

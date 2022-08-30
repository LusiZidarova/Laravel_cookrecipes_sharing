<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('categories')->delete();
       DB::table('categories')->insert(
            array(
                [
                    
                    'name' => 'Салати',
                ],
                [
                    'name' => 'Ястия с месо',
                ],
                [
                    'name' => 'Ястия без месо',
                ],
                [
                    'name' => 'Ястия с яйца',
                ],
                [
                    'name' => 'Ястия с риба',
                ],
                [
                    'name' => 'Гарнитури',
                ],
                [
                    'name' => 'Супи',
                ],
                [
                    'name' => 'Сосове',
                ],
                [
                    'name' => 'Предястия',
                ],
                [
                    'name' => 'Тестени',
                ],
                [
                    'name' => 'Десерти',
                ],
                [
                    'name' => 'Напитки',
                ],
            )
          
        );
    }

      /*Breakfast
Brunch
Lunch
Beverages
Appetizers
Soup/Stews
Salads Vegetable Dessert
Vegetable
Dessert
Main dishes Beef Poultry Pork Seafood Vegetarian
Beef
Poultry
Pork
Seafood
Vegetarian
Side Dishes Vegetables Grain Other
Vegetables
Grain
Other
Condiments
Sauces
Seasoning
Desserts Cookies Bars Cakes/Frosting Pies Candy Sauces
Cookies
Bars
Cakes/Frosting
Pies
Candy
Sauces
Bread Quick Yeast
Quick
Yeast*/
}

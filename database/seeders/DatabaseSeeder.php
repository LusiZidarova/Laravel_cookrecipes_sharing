<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
/* use Database\Seeders\NationalSeeder;
use Database\Seeders\MeasureSeeder;
use Database\Seeders\CategorySeeder; */


/* use App\Models\Category;
use App\Models\National;
use App\Models\Measure;
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NationalSeeder::class,
            MeasureSeeder::class,
            CategorySeeder::class,
        ]);
    }
}

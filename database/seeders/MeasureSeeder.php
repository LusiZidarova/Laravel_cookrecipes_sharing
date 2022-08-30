<?php

namespace Database\Seeders;

use App\Models\Measure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('measures')->delete();
     DB::table('measures')->insert(
            array(
                [                  
                    'name' => 'к.ч',
                ],
                [
                    'name' => 'ч.ч',
                ],
                [
                    'name' => 'к.л',
                ],
                [
                    'name' => 'с.л',
                ],
                [
                    'name' => 'мл',
                ],
                [
                    'name' => 'гр',
                ],
                [
                    'name' => 'бр',
                ],
                
            )
          
        );
    }
}

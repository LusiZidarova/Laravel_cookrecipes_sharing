<?php

namespace Database\Seeders;

use App\Models\National;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('nationals')->delete();
       DB::table('nationals')->insert(
            array(
                [                  
                    'name' => 'Австралийска Кухня',
                ],
                [                  
                    'name' => 'Австрийска Кухня',
                ],
                [                  
                    'name' => 'Американска Кухня',
                ],
                [                  
                    'name' => 'Английска Кухня',
                ],
                [                  
                    'name' => 'Арабска Кухня',
                ],
                [                  
                    'name' => 'Арменска Кухня',
                ],
                [                  
                    'name' => 'Балканска Кухня',
                ],
                [                  
                    'name' => 'Белгийска Кухня',
                ],
                [                  
                    'name' => 'Бразилска Кухня',
                ],
                [                  
                    'name' => 'Българска Кухня',
                ],
                [                  
                    'name' => 'Гръцка Кухня',
                ],
                [                  
                    'name' => 'Датска Кухня',
                ],
                [                  
                    'name' => 'Ирландска Кухня',
                ],
                [                  
                    'name' => 'Испанска Кухня',
                ],
                [                  
                    'name' => 'Италианска Кухня',
                ],
                [                  
                    'name' => 'Китайска Кухня',
                ],
                [                  
                    'name' => 'Македонска Кухня',
                ],
                [                  
                    'name' => 'Мароканска Кухня',
                ],
                [                  
                    'name' => 'Мексиканска Кухня
                    ',
                ],
                [                  
                    'name' => 'Молдовска Кухня',
                ],
                [                  
                    'name' => 'Немска Кухня',
                ],
                [                  
                    'name' => 'Полска Кухня',
                ],
                [                  
                    'name' => 'Португалска Кухня',
                ],
                [                  
                    'name' => 'Румънска Кухня',
                ],
                            
            )
          
        );
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\City::class)->create([
            'name'=>'Curitiba',
            'country_id'=> function(){
                return factory(App\Models\Country::class)->create([
                    'name'=>'Brazil',
                    'continent_id' => function(){
                        return factory(App\Models\Continent::class)->create([
                            'name'=>'South America'
                        ])->id;
                    }
                ]);
            }
        ]);
    }
}

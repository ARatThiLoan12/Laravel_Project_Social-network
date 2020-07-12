<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MessageTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        {
            for($i=0; $i<2; $i++){
                DB::table('message_types')->insert([
                    'type'=> $faker->name,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

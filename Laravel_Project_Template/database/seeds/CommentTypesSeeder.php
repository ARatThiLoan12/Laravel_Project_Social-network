<?php

use Illuminate\Database\Seeder;

class CommentTypesSeeder extends Seeder
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
                DB::table('comment_types')->insert([
                    'type'=> $faker->name,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

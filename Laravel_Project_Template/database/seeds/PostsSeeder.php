<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $UserID = DB::table('users')->pluck('id');

        $faker = Faker\Factory::create();
        {
            for($i=0; $i<2; $i++){
                DB::table('posts')->insert([
                    'user' => $faker->randomElement($UserID),
                    'content'=> $faker->name,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

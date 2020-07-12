<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LikesSeeder extends Seeder
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
        $PostID = DB::table('posts')->pluck('id');

        $faker = Faker\Factory::create();
        {
            for($i=0; $i<2; $i++){
                DB::table('likes')->insert([
                    'user' => $faker->randomElement($UserID),
                    'post' => $faker->randomElement($PostID),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

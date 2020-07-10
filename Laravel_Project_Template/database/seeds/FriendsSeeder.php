<?php

use Illuminate\Database\Seeder;

class FriendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $UserID= DB::table('users')->pluck('id');
        //
        $faker = Faker\Factory::create();
        {
            for($i=0; $i<2; $i++){
                DB::table('friends')->insert([
                    'user_send' => $faker->randomElement($UserID),
                    'user_receive' => $faker->randomElement($UserID),
                    'status' => $faker->numberBetween($max=1, $min=0),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class NotificationsSeeder extends Seeder
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
        $NotiID = DB::table('notification_types')->pluck('id');

        $faker = Faker\Factory::create();
        {
            for($i=0; $i<2; $i++){
                DB::table('notifications')->insert([
                    'user' => $faker->randomElement($UserID),
                    'content'=> $faker->name,
                    'type' => $faker->randomElement($NotiID),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

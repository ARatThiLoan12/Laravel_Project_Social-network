<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //tao variable de lay data o bang account types
        $AccountTypeID= DB::table('account_types')->pluck('id');

        $faker = Faker\Factory::create();
        {

            for($i=0; $i<4; $i++){
                DB::table('users')->insert([
                    'image' => 'public/source/users'. $i . '.jpg',
                    'full_name' => $faker->name,
                    'date_of_birth' => new DateTime(),
                    'gender' => $faker->numberBetween($max=2, $min=0),
                    'address' => $faker->address,
                    'email' => $faker->email,
                    'phone' => $faker->email,
                    'password' => $faker->name,
                    //lay element
                    'account_type' => $faker->randomElement($AccountTypeID),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

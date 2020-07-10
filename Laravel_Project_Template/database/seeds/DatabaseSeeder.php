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
        $this->call([
            //AccountTypesSeeder::class,
            // UsersSeeder::class,
            // FriendsSeeder::class,
            //NotificationTypesSeeder::class,
            NotificaionsSeeder::class,
            // MessageTypesSeeder::class,
            // CommentsSeeder::class,
            // CommenttypesSeeder::class,
            // PostsSeeder::class,
            // LikesSeeder::class,
        ]          
        );
    }
}

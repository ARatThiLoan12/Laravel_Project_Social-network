<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
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
        $CommentType = DB::table('comment_types')->pluck('id');
        $faker = Faker\Factory::create();
        {
            for($i=0; $i<2; $i++){
                DB::table('comments')->insert([
                    'user' => $faker->randomElement($UserID),
                    'post' => $faker->randomElement($PostID),
                    'content'=> $faker->name,
                    'comment_type' => $faker->randomElement($CommentType),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}

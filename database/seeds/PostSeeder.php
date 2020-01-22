<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker\Factory::create();

        for($i = 0; $i < 200; $i++){

          $post = new Post();
          $post->title = $faker->text(20);
          $post->username = $faker->text(5);
          $post->description = $faker->text(50);
          $post->save();

        //  $post = new Post();
        //  $post->title = 'Post ' . $i;
        //  $post->username = 'WLAJ';
        //  $post->description = 'This is my first post';

        //  $post->save();
        }
    }
}

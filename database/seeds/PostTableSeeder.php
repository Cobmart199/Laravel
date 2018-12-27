<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Learning the awesome laravel',
            'content' => 'This mvc laravel works really well'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'Hopefully  laravel',
            'content' => 'This mvc laravel works really well so Thursday will work out'
        ]);
        $post->save();

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Video;
use App\Models\Tag;
class postvideoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =Post::get();
        $videos =Video::get();
        foreach($posts as $post){
            $tag =Tag::get()->random()->first();
            $post->tag()->save($tag);
        }
        foreach($videos as $video){
            $tag =Tag::get()->random()->first();
            $video->tag()->save($tag);
        }
    }
}

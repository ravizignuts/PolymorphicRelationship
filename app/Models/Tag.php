<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Video;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $guards = [ ];
    public function taggable(){
        return $this->morphedByMany([Post::class,Video::class],'taggable');
    }
    //define for particular model
    // public function post(){
    //     return $this->morphedByMany(Post::class,'taggable');
    // }
    // public function video(){
    //     return $this->morphedByMany(Video::class,'taggable');
    // }
    // public function taggable()
    // {
    //     return $this->morphedByMany();
    // }

}

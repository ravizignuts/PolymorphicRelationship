<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Tag;
class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function image(){
        //one to one Relationship
        //  return $this->morphOne(Image::class,'imageable');
        //one to many Relationship
        return $this->morphMany(Image::class,'imageable');



    }
    public function tag(){
         //Many To Many Relationship
        return $this->morphToMany(Tag::class,'taggable');
    }
}

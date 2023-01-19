<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Post extends Model
{
    use HasFactory;
    public function image(){
        //one to one Relationship
        //  return $this->morphOne(Image::class,'imageable');
        //one to many Relationship
        return $this->morphMany(Image::class,'imageable');

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
class Video extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $guards = [ ];
    public function tag(){
        //Many To Many Relationship
       return $this->morphToMany(Tag::class,'taggable');
   }
}


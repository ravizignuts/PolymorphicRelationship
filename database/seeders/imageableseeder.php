<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Facker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;




class imageableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //     for($i = 0;$i<=10;$i++){
    //     DB::table('posts')->insert([
    //         'name' => str::random(10),
    //     ]);
    //     DB::table('users')->insert([
    //         'name' => str::random(10),
    //     ]);
    // }
    Image::factory(10)->create();
    }

}

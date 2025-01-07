<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $posts = [
            ['title'=>'tips cepat nikah', 'content'=>'lorem ipsum'],
            ['title'=>'haruskah menunda nikah', 'content'=>'lorem ipsum'],
            ['title'=>'tips cepat kaya', 'content'=>'lorem ipsum']
        ];

        //masukan database
        DB::table('posts')->insert($posts);
    }
}

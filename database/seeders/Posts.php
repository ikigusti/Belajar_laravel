<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['title'=>'Tips Cepat Nikah','content'=>'Assalam Studio'],
            ['title'=>'Harus Menunda Nikah?','content'=>'Assalam Studio'],
            ['title'=>'Membangun Visi Misi Keluarga','content'=>'Assalam Studio'],
        ];
        DB::table('posts')->insert($sempel);
    }
}

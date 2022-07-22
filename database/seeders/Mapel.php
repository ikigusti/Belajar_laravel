<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Mapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['kode'=>'MPO1','nama'=>'ALGORITMA','sks'=>'2','semester'=>'1'],
            ['kode'=>'MPO2','nama'=>'BASISDATA','sks'=>'3','semester'=>'1'],
            ['kode'=>'MPO3','nama'=>'ASSEMBLTY','sks'=>'2','semester'=>'2'],
        ];
        DB::table('mapel')->insert($sempel);
    }
}

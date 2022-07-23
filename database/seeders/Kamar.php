<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Kamar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['no_kamar'=>'1','jenis_kamar'=>'Royal','harga'=>'RP.15000.000.00'],
            ['no_kamar'=>'2','jenis_kamar'=>'Royal','harga'=>'RP.15000.000.00'],
            ['no_kamar'=>'3','jenis_kamar'=>'Royal','harga'=>'RP.15000.000.00'],
        ];
        DB::table('kamars')->insert($sempel); 
    }
}

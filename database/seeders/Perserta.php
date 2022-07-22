<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Perserta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['no'=>'2001','kode'=>'MPO1'],
            ['no'=>'2001','kode'=>'MPO2'],
            ['no'=>'2003','kode'=>'MPO1'],
            ['no'=>'2003','kode'=>'MPO2'],
            ['no'=>'2004','kode'=>'MPO1'],
            ['no'=>'2004','kode'=>'MPO2'],
        ];
        DB::table('perserta')->insert($sempel);
    }
}

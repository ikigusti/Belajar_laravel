<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['id_dtl'=>'251627','no_transaksi'=>'826283826','no_kamar'=>'1'],
            ['id_dtl'=>'547758','no_transaksi'=>'853741245','no_kamar'=>'2'],
            ['id_dtl'=>'351647','no_transaksi'=>'831578086','no_kamar'=>'3'],
        ];
        DB::table('details')->insert($sempel); 
    }
}

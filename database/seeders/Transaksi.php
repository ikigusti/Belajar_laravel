<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['no_transaksi'=>'751334','id_pengunjung'=>'2516351','id_karyawan'=>'265126413','jml_kamar'=>'2','tgl_masuk'=>'12-07-2021','tgl_keluar'=>'24-07-2021','lama_nginap'=>'12 Hari','total_harga'=>'RP.2300000.0000.00'],
            ['no_transaksi'=>'271342','id_pengunjung'=>'7234316','id_karyawan'=>'265126413','jml_kamar'=>'2','tgl_masuk'=>'12-07-2021','tgl_keluar'=>'24-07-2021','lama_nginap'=>'12 Hari','total_harga'=>'RP.2300000.0000.00'],
            ['no_transaksi'=>'346322','id_pengunjung'=>'2634723','id_karyawan'=>'265126413','jml_kamar'=>'2','tgl_masuk'=>'12-07-2021','tgl_keluar'=>'24-07-2021','lama_nginap'=>'12 Hari','total_harga'=>'RP.2300000.0000.00'],
        ];
        DB::table('transaksis')->insert($sempel); 
    }
}

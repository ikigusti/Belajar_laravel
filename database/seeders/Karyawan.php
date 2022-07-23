<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Karyawan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['id_karyawan'=>'123','nama_karyawan'=>'Agus','jk'=>'Laki'],
            ['id_karyawan'=>'231','nama_karyawan'=>'Gusa','jk'=>'Perempuan'],
            ['id_karyawan'=>'312','nama_karyawan'=>'Usag','jk'=>'Laki'],
        ];
        DB::table('karyawans')->insert($sempel);
    }
}

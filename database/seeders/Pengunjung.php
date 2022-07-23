<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class Pengunjung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel=[
            ['id_pengunjung'=>'123','nama_pengunjung'=>'Agus','alamat'=>'Bandung','jk'=>'Laki','no_tlp'=>'08765432112','no_ktp'=>'21bj3bo25'],
            ['id_pengunjung'=>'231','nama_pengunjung'=>'Gusa','alamat'=>'Bandung','jk'=>'Perempuan','no_tlp'=>'0812345678','no_ktp'=>'32hvji21'],
            ['id_pengunjung'=>'312','nama_pengunjung'=>'Usag','alamat'=>'Bandung','jk'=>'Laki','no_tlp'=>'0843218765','no_ktp'=>'j4v4u9bx139'],
        ];
        DB::table('pengunjungs')->insert($sempel);
    }
}

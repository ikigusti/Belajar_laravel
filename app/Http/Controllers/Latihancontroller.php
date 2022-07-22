<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Latihancontroller extends Controller
{
    public function menu(){
        $a = [
           array('bera'=>"Beranda",'beri'=>"Berita",'olahraga'=>"Olahraga",'olah'=>['Sepak Bola','Bulu Tangkis'],'poli'=>"Politik",'manca'=>"Manca Negara",'teng'=>"Tentang"),
        ];
        //  dd($a);
        return view('pages.latihan',['menu'=>$a]);
     }

     public function dosen(){
      $b = [
         ['id'=>1,'nados'=>"Yusuf Bachtiar",'tali'=>" Pemrograman Mobile",
         'mahasiswa'=>[
            ['no'=>1,'nama'=>"Muhammad Soleh",'nilai'=>78],
            ['no'=>2,'nama'=>"Jujun Junaedi",'nilai'=>85],
            ['no'=>3,'nama'=>"Mamat Alkatiri",'nilai'=>90],
            ['no'=>4,'nama'=>"Ubay holin",'nilai'=>87],
            ['no'=>5,'nama'=>"Fadillah",'nilai'=>95],
            ]
      ],
      ['id'=>2,'nados'=>"Yaris Riyadi",'tali'=>" Pemrograman Web",
      'mahasiswa'=>[
         ['no'=>1,'nama'=>"Alfred McTomminay",'nilai'=>67],
         ['no'=>2,'nama'=>"Bruno Kasmir",'nilai'=>90],
         ['no'=>3,'nama'=>"Akid Hendra",'nilai'=>50],
         ['no'=>4,'nama'=>"Dany Irawan",'nilai'=>70],
         ['no'=>5,'nama'=>"Chandra Mega Putra",'nilai'=>60],
         ]
      ],
   ];
      return view('pages.latihan2',['dosen'=>$b]);
     }

     public function tv() {

      $tv = [
          ['channel' => 'Net TV', 'acara' => '86', 'jam' => '19.00','tgl'=>'13 Juli 2022'],
          ['channel' => 'TVRI', 'acara' => 'Orang Kantoran', 'jam' => '17.00','tgl'=>'14 Juli 2022'],
          ['channel' => 'BEIRNSPORT', 'acara' => 'Inter Milan Vs AC Milan', 'jam' => '20.00','tgl'=>'15 Juli 2022'],
          ['channel' => 'Ochannel', 'acara' => 'Voli', 'jam' => '10.30','tgl'=>"16 Juli 2022"],
          ['channel' => 'Indosiar', 'acara' => 'Persib Bandung VS Persikab', 'jam' => '20.45','tgl'=>'17 Juli 2022']
      ];
      // dd($tv);
      return view('pages.latihan3', ['tv' => $tv]);
  }
}

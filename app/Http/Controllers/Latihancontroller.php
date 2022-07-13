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
            ['nama'=>"Muhammad Soleh",'nilai'=>78],
            ['nama'=>"Jujun Junaedi",'nilai'=>85],
            ['nama'=>"Mamat Alkatiri",'nilai'=>90],
            ['nama'=>"Ubay holin",'nilai'=>87],
            ['nama'=>"Fadillah",'nilai'=>95],
            ]
      ],
      ['id'=>2,'nados'=>"Yaris Riyadi",'tali'=>" Pemrograman Web",
      'mahasiswa'=>[
         ['nama'=>"Alfred McTomminay",'nilai'=>67],
         ['nama'=>"Bruno Kasmir",'nilai'=>90],
         ['nama'=>"Akid Hendra",'nilai'=>50],
         ['nama'=>"Dany Irawan",'nilai'=>70],
         ['nama'=>"Chandra Mega Putra",'nilai'=>60],
         ]
      ],
   ];
      return view('pages.latihan2',['dosen'=>$b]);
     }
}

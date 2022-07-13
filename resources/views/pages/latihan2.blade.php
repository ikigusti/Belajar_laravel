<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><b>Latihan 2</b></legend>
        <b>Soal 2</b>
        @foreach ($dosen as $list)
        <ul>
           <li>Nama Dosen:{{$list['nados']}}</li> 
           Mata Kuliah:{{$list['tali']}} <br>
           <?php $nilai_b=0 ?>
           @foreach ($list['mahasiswa'] as $item)
           <li>Nama mahasiswa: {{$item['nama']}}</li>
           Nilai : {{$item['nilai']}} <br>
           Grade : @if ($item['nilai']>=90)
           A
           @elseif($item['nilai']>=80)
           B
           @elseif($item['nilai']>=70)
           C
           @elseif($item['nilai']>=50)
           D
           @else
           @endif
            <?php $nilai_b += $item['nilai'] ?>   
           @endforeach
           <hr>
           Nilai = {{$nilai_b}} <br>
           Rata-Rata = {{$nilai_b / count($list['mahasiswa'])}} <br>
           <hr>
        </ul>
        @endforeach
    </fieldset>
</body>
</html>
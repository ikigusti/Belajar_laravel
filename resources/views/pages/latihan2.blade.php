<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta 5tp-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><h2>Soal 2</h2> </legend>
        <center>
             @foreach ($dosen as $list)
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th align="center">Nama Dosen</th>
                    <th align="center">Mata Kuliah</th>
                    <?php $nilai_b=0 ?>
                </tr>
                <tr>
                    <td align="center">{{$list['nados']}}</td>
                    <td align="center">{{$list['tali']}}</td>
                    <br>
                </tr>
                </table>
                <br>
                <table border="1" cellpadding="5" cellspacing="0">
                @foreach ($list['mahasiswa'] as $item)
                <tr>
                    <th align="center">No</th>
                  <th align="center">Nama mahasiswa</th>
                  <th align="center">Nilai</th>
                  <th align="center">Grade</th>
                  <?php $nilai_b += $item['nilai'] ?>
                </tr>
                <tr>
                    <th align="center">{{$item['no']}}</th>
                    <td align="center">{{$item['nama']}}</td>
                    <td align="center">{{$item['nilai']}}</td>
                    <td align="center"> @if ($item['nilai']>=90)
                        A
                        @elseif($item['nilai']>=80)
                        B
                        @elseif($item['nilai']>=70)
                        C
                        @elseif($item['nilai']>=50)
                        D
                        @else
                        @endif</td>
                </tr>
                 @endforeach
                 </table>
                 <br><hr>
                 <table border="1" cellpadding="5" cellspacing="0">
                 <tr>
                   <th align="center">Nilai</th>
                    <th align="center">Rata-Rata</th>
                    <th align="center">Grade</th>
                 </tr>
                 <tr>
                    <td align="center">{{$nilai_b}}</td>
                    <td align="center">{{$nilai_b / count($list['mahasiswa'])}}</td>
                    <td align="center"> @if ($item['nilai']>=90 && $nilai_b / count($list['mahasiswa' ])<=100)
                        A
                        @elseif($item['nilai']>=80 && $nilai_b / count($list['mahasiswa'])<=90)
                        B
                        @elseif($item['nilai']>=70 && $nilai_b / count($list['mahasiswa'])<=80)
                        C
                        @elseif($item['nilai']>=50 && $nilai_b / count($list['mahasiswa'])<=70)
                        D
                        @else
                        @endif</td>
                 </tr>
            </table>
            <hr>
        @endforeach
        </center>
       
    </fieldset>
</body>
</html>
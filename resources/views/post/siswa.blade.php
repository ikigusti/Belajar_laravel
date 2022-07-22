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
        <legend>Data Post</legend>
        <table border="1">
            <tr>
                <td align="center"><b>ID</b></td>
                <td align="center"><b>NO Siswa</b></td>
                <td align="center"><b>Nama</b></td>
                <td align="center"><b>JK</b></td>
                <td align="center"><b>Jurusan</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($siswa as $data)
                <tr>
                    <td align="center"><i>{{$no++}}</i></td>
                    <td align="center"><i>{{$data['no']}}</i></td>
                    <td align="center"><i>{{$data['nama']}}</i></td>
                    <td align="center"><i>{{$data['jk']}}</i></td>
                    <td align="center"><i>{{$data['jurusan']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            <tr>
                <td align="center"><b>No Siswa</b></td>
                <td align="center"><b>Kode MP</b></td>
            </tr>
            @foreach ($perserta as $data)
                <tr>
                    <td align="center"><i>{{$data['no']}}</i></td>
                    <td align="center"><i>{{$data['kode']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            <tr>
                <td align="center"><b>Kode MP</b></td>
                <td align="center"><b>Nama MP</b></td>
                <td align="center"><b>SKS</b></td>
                <td align="center"><b>Semester</b></td>
            </tr>
            @foreach ($mapel as $data)
                <tr>
                    <td align="center"><i>{{$data['kode']}}</i></td>
                    <td align="center"><i>{{$data['nama']}}</i></td>
                    <td align="center"><i>{{$data['sks']}}</i></td>
                    <td align="center"><i>{{$data['semester']}}</i></td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>
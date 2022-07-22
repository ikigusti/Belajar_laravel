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
        <table border="1">
            <tr>
                <td><b>Kode MP</b></td>
                <td><b>Nama MP</b></td>
                <td><b>SKS</b></td>
                <td><b>Semester</b></td>
            </tr>
            @foreach ($mapel as $data)
                <tr>
                    <td><i>{{$data['kode']}}</i></td>
                    <td><i>{{$data['nama']}}</i></td>
                    <td><i>{{$data['sks']}}</i></td>
                    <td><i>{{$data['semester']}}</i></td>
                </tr>
            @endforeach
        </table>
</body>
</html>
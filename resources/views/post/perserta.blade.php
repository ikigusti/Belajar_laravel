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
                <td><b>No Siswa</b></td>
                <td><b>Kode MP</b></td>
            </tr>
            @foreach ($perserta as $data)
                <tr>
                    <td><i>{{$data['no']}}</i></td>
                    <td><i>{{$data['kode']}}</i></td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>
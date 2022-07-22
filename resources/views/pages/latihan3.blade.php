<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TV Station</title>
</head>

<body>

    <fieldset>
        <legend>
            <h2>
               Soal 3
            </h2>
        </legend>
        <table border="1" cellpadding="5" cellspacing="0"> 
             @foreach ($tv as $list)
            <tr>
            <th align="center">Channel </th>
            <th align="center">Acara </th>
            <th align="center">Jam Tayang</th> 
            <th align="center">Tanggal dibuat</th>  
            </tr>
           <tr>
            <td align="center">{{ $list['channel'] }}</td>
            <td align="center">{{ $list['acara'] }}</td>
            <td align="center">{{ $list['jam'] }}</td>
           <td align="center"> {{ $list['tgl'] }}</td>
           </tr> 
            @endforeach
        </table>
    </fieldset>

</body>

</html>
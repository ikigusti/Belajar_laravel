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
        <legend><b>Latihan 1</b></legend>
        <b>Soal 1</b>
        @foreach ($menu as $list)
        <ul>
            <li>{{$list['bera']}}</li>
            <li>{{$list['beri']}}</li>
            <ul>
                <li>{{$list['olahraga']}}</li>
              <ul>
                @foreach ( $list['olah'] as $raga)
                    <li>{{$raga}}</li>
                @endforeach
              </ul>
              <li>{{$list['poli']}}</li>
              <li>{{$list['manca']}}</li>
            </ul>
            <li>{{$list['teng']}}</li>
           </ul>
        @endforeach
          </fieldset>
</body>
</html>
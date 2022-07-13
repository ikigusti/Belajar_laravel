<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <b>MENU WARTEG</b> 
    <table>
        <tr>
            <td>1</td><td>.</td><td>Ayam Goreng</td>
        </tr>
        <tr>
            <td>2</td><td>.</td><td>Lobster</td>
        </tr>
        <tr>
            <td>3</td><td>.</td><td>Tiramisu</td>
        </tr>
        <tr>
            <td>4</td><td>.</td><td>Pizza</td>
        </tr>
        <tr>
            <td>5</td><td>.</td><td>Pasta</td>
        </tr>
    </table>
    </center>
    <br>
    <hr>
    Pesanan anda adalah : <b>{{$a}}</b>
    
    @if($a=='Ayam goreng')
    <br>
    Harga {{$a}} Rp.150000
    @elseif($a=='Lobster')
    <br>
    Harga {{$a}} Rp.20000
    @elseif($a=='Pizza')
    <br>
    Harga {{$a}} Rp.50000
    @elseif($a=='Tiramisu')
    <br>
    Harga {{$a}} Rp.30000
    @ifelse($a=='Pasta')
    <br>
    Harga {{$a}} Rp.25000
    @else
    <br>
    list Harga tidak ada
    @endif
<br><hr>
    Pesanan anda adalah : <b>{{$b}}</b>
    
    @if($b=='Ayam goreng')
    <br>
    Harga {{$b}} Rp.150000
    @elseif($b=='Lobster')
    <br>
    Harga {{$b}} Rp.20000
    @elseif($b=='Pizza')
    <br>
    Harga {{$b}} Rp.50000
    @elseif($b=='Tiramisu')
    <br>
    Harga {{$b}} Rp.30000
    @ifelse($b=='Pasta')
    <br>
    Harga {{$b}} Rp.25000
    @else
    <br>
    list Harga tidak ada
    @endif
    <hr>
</body>
</html>
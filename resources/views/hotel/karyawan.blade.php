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
        <legend>Data Hotel</legend>
        <h2>1.karyawan</h2>
        <table border="1" cellpading="5">
            <tr>
                <th align="center"><b>ID Karyawan</b></th>
                <th align="center"><b>Nama Karyawan</b></th>
                <th align="center"><b>Jenis Kelamin</b></th>
            </tr>
              @foreach ($karyawan as $kar)
            <tr>
                    <td align="center">{{$kar['id_karyawan']}}</td>
                    <td align="center">{{$kar['nama_karyawan']}}</td>
                    <td align="center">{{$kar['jk']}}</td>
                
            </tr>
            @endforeach
        </table>
        <hr>
        <h2>2.Pengunjung</h2>
        <table border="1" cellpading="5">
            <tr>
                <th align="center"><b>ID Pengunjung</b></th>
                <th align="center"><b>Nama Pengunjung</b></th>
                <th align="center"><b>Alamat</b></th>
                <th align="center"><b>Jenis Kelamin</b></th>
                <th align="center"><b>No Telepon</b></th>
                <th align="center"><b>No KTP</b></th>
            </tr>
              @foreach ($pengunjung as $peng)
            <tr>
                    <td align="center">{{$peng['id_pengunjung']}}</td>
                    <td align="center">{{$peng['nama_pengunjung']}}</td>
                    <td align="center">{{$peng['alamat']}}</td>
                    <td align="center">{{$peng['jk']}}</td>
                    <td align="center">{{$peng['no_tlp']}}</td>
                    <td align="center">{{$peng['no_ktp']}}</td>
                
            </tr>
            @endforeach
        </table>
        <hr>
        <h2>3.Kamar</h2>
        <table border="1" cellpading="5">
            <tr>
                <th align="center"><b>No Kamar</b></th>
                <th align="center"><b>Jenis Kamar</b></th>
                <th align="center"><b>Harga</b></th>
            </tr>
              @foreach ($kamar as $mar)
            <tr>
                    <td align="center">{{$mar['no_kamar']}}</td>
                    <td align="center">{{$mar['jenis_kamar']}}</td>
                    <td align="center">{{$mar['harga']}}</td>
            </tr>
            @endforeach
        </table>
        <hr>
        <h2>4.Detail Transaksi</h2>
        <table border="1" cellpading="5">
            <tr>
                <th align="center"><b>ID Detail Transaksi</b></th>
                <th align="center"><b>No Transaksi</b></th>
                <th align="center"><b>No Kamar</b></th>
            </tr>
              @foreach ($detail as $deta)
            <tr>
                    <td align="center">{{$deta['id_dtl']}}</td>
                    <td align="center">{{$deta['no_transaksi']}}</td>
                    <td align="center">{{$deta['no_kamar']}}</td>
            </tr>
            @endforeach
        </table>
        <hr>
        <h2>5.Transaksi</h2>
        <table border="1" cellpading="5">
            <tr>
                <th align="center"><b>No Transaksi</b></th>
                <th align="center"><b>Id Pengunjung</b></th>
                <th align="center"><b>Id Karyawan</b></th>
                <th align="center"><b>Jumlah Kamar</b></th>
                <th align="center"><b>Tanggal Masuk</b></th>
                <th align="center"><b>Tanggal Keluar</b></th>
                <th align="center"><b>Lama Nginap</b></th>
                <th align="center"><b>Total Harga</b></th>
            </tr>
              @foreach ($transaksi as $saksi)
            <tr>
                    <td align="center">{{$saksi['no_transaksi']}}</td>
                    <td align="center">{{$saksi['id_pengunjung']}}</td>
                    <td align="center">{{$saksi['id_karyawan']}}</td>
                    <td align="center">{{$saksi['jml_kamar']}}</td>
                    <td align="center">{{$saksi['tgl_masuk']}}</td>
                    <td align="center">{{$saksi['tgl_keluar']}}</td>
                    <td align="center">{{$saksi['lama_nginap']}}</td>
                    <td align="center">{{$saksi['total_harga']}}</td>
            </tr>
            @endforeach
        </table>
        <hr>
    </fieldset>
</body>
</html>
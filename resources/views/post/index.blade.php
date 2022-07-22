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
                <td><b>NO</b></td>
                <td><b>Title</b></td>
                <td><b>Content</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($post as $data)
                <tr>
                    <td><i>{{$no++}}</i></td>
                    <td><i>{{$data['title']}}</i></td>
                    <td><i>{{$data->content}}</i></td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $ireng)
    <tr>
        <td>{{$ireng['username']}}</td>
        <td>{{$ireng['email']}}</td>
    </tr>
    @endforeach
</body>
</html>
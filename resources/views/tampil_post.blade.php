<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($post as $data)
    <table border=1>
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->content }}</td>
        </tr>
    </table>
    @endforeach
</body>
</html>
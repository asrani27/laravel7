<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $item)
    <form method="post" action="/angka/{{$item->id}}/update">
        @csrf
        <input type="text" name="number" value="{{$item->number}}">
        <input type="hidden" name="currentPage" value="{{$data->currentPage()}}">
        <button type="submit">Update</button>
    </form>
    @endforeach
    {{$data->links()}}
</body>
</html>
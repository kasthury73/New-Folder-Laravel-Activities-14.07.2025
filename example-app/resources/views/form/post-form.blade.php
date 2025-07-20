<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="post" method="post">
    @csrf
    @method('post')
    <input type="text" name="fname" id="fname">
    <input type="submit" value="post" name="_method">
    </form>
</body>
</html>

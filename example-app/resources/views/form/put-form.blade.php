<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
    <form action="put" method="post">
    @csrf
    @method('put')
    <input type="text" name="fname" id="fname">
    <input type="submit" value="put" >
</form>
</body>
</html>

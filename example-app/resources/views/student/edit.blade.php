<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/student/10" method="post">
        @method('put')
        @csrf


        <label for="first name">first name</label>
        <br>
        <input type="text" name="first name" id="first name">
        <br>
        <label for="last name">last name</label>
        <br>
        <input type="text" name="last name" id="last name">
        <br>
        <label for="age">age</label>
        <br>
        <input type="text" name="age" id="age">
        <br>
        <button>Submit</button>
        <br>

        @method('delete')  
        <input type="submit" formaction="/student/10" formmethod="post">
    </form>
</body>
</html>

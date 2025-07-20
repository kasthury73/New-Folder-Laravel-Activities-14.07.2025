
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>


<body>
    <form action="/employee-detail" method="post">
        @csrf
        <lable>id</lable>
        <br>
        <input type="text" name="id" id="id">
        <br>

        <lable>name</lable>
         <br>
        <input type="text" name="name" id="name">
        <br>

        <lable>age</lable>
         <br>
        <input type="text" name="age" id="age">
        <br>

        <lable>Phone No</lable>
         <br>
        <input type="text" name="phone" id="phone">
        <br>

        <label>NIC-No</label>
        <br>
        <input type="text" name="nic-no" id="nic-no">
        <br>


        <button>Submit</button>
        <br>
    </form>

    {{-- <img src="{{asset('images/flower.jpg')}}"> --}}

</body>
</html>

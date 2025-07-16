<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!--<link rel="stylesheet" href="style.css">-->

    <style>
        .hello{
            width: 30%;
            background-color: rgb(143, 224, 230);
            text-align: justify;
        }


    </style>
</head>

<body>

    <h1 style="color: brown">HTML FORM</h1>
    <div class="hello">

    <fieldset>
        <form action="#" method="post" autocomplete="off" novalidate>
            @csrf
        <table>

        <tr>
            <td><label for="text">Text</label></td>
            <td><input type="text" name="name" id="text" value="{{$name}}"></td>
        </tr>

        <tr>
            <td><label for="Password">Password</label></td>
            <td><input type="text" name="password" id="Password" value="{{$password}}"></td>
        </tr>

        <tr>
            <td><label for="Email">Email</label></td>
            <td><input type="Email" name="email" id="Email" value="{{$email}}"></td>
        </tr>

        <tr>
            <td><label for="Time">Time</label></td>
            <td><input type="Time" name="time" id="Time" value="{{$time}}"></td>
        </tr>

        <tr>
            <td><label for="Date">Date</label></td>
            <td><input type="Date" name="date" id="date" value="{{$date}}"></td>
        </tr>

        <tr>
            <td><label for="Datetime">Datetime</label></td>
            <td><input type="Datetime" name="datetime" id="Datetime" value="{{$datetime}}"></td>
        </tr>

        <tr>
            <td><label for="Radio">Radio</label></td>
            <td>
                <input type="radio" value="Male" name="gender" id="male"  @if($gender =="Male") checked @endif>
                <label for="male">Male</label>

                <input type="radio" value="Female" name="gender"  id="female" @if($gender =="Female") checked @endif>
                <label for="female">Female</label>
            </td>
        </tr>

        <tr>

        <td><label for="Checkbox">Checkbox</label></td>
        <td>
            <input type="Checkbox"  name="subject[]" id="maths" value="maths" @if(in_array('maths',$subject)) checked @endif >
            <label for="maths">maths</lable>

            <input type="checkbox" value="english" name="subject[]" id="english" @if(in_array('english',$subject)) checked @endif>
            <label for="english">english</label>

            <input type="checkbox" value="tamil" name="subject[]" id="tamil" @if(in_array('tamil',$subject)) checked @endif>
            <label for="tamil">tamil</label>

            </td>
        </tr>

        <tr>
            <td><label for="Search">Search</label></td>
            <td><input type="Search" name="search" id="Search" value="{{$search}}"></td>
        </tr>

        <tr>
            <td><label for="Number">Number</label></td>
            <td><input type="Number" name="number" id="Number" step="3" min="0" max="10" value="{{$number}}"></td>
        </tr>

        <tr>
            <td><label for="Range">Range</label></td>
            <td><input type="Range" name="range" id="Range" value="{{$range}}"></td>
        </tr>

        <tr>
            <td><label for="Month">Month</label></td>
            <td><input type="Month" name="month" id="Month" value="{{$month}}"></td>
        </tr>

        <tr>
            <td><label for="Week">Week</label></td>
            <td><input type="Week" name="week" id="Week" value="{{$week}}"></td>
        </tr>

        <tr>
            <td><label for="Telphonenumber">Telphonenumber</label></td>
            <td><input type="Telphonenumber" name="telphonenumber" id="Telphonenumber" value="{{$telphonenumber}}"></td>
        </tr>

        <tr>
            <td><lable for="url">url</lable></td>
            <td><input type="url" name="url" id="url" value="{{$url}}"></td>
        </tr>
        <tr>
            <td><lable for="Image">image</lable></td>
            <td><input type="Image" name="image" id="Image" src="{{asset('images/flower.jpg')}}"></td>
        </tr>



        <tr>
            <td><lable for="File">File</lable></td>
            <td><input type="File" name="file" id="File"></td>

        </tr>
        <tr>
        <td lable for="Select">Select</lable></td>
        <td>
        <select name="select[]" id="select" multiple>
            <option value="10A" @if(in_array('10A',$select)) selected @endif>10A</option>
            <option value="11A" @if(in_array('11A',$select)) selected @endif>11A</option>
            <option value="12A" @if(in_array('12A',$select)) selected @endif>12A</option>
        </select>
        </td>
        </tr>

        <tr>
            <td><label for="Address">address</label></td>
            <td><textarea name="address" id="address" cols="30" rows="10">{{$address}}</textarea></td>

        </tr>

        {{-- <tr>
            <td><lable for="Button">Button</lable></td>
            <td><input type="Button" name="button" id="Button" value="delete"></td>
        </tr> --}}

         <tr>
            <td><lable for="Reset">Reset</lable></td>
            <td><input type="Reset" name="reset" id="Rest"></td>
        </tr>



        <tr>
            <td><lable for="Submit">Submit</lable></td>
            <td><input type="Submit" name="submit" id="Submit"></td>
        </tr>



        </table>
        </form>

    </fieldset>
    </div>
</body>
</html>

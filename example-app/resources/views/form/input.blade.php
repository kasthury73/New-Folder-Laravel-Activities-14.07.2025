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
        <form action="/form" method="post" autocomplete="off" novalidate>
            @csrf
        <table>

        <tr>
            <td><label for="text">Text</label></td>
            <td><input type="text" name="name" id="text"></td>
        </tr>

        <tr>
            <td><label for="Password">Password</label></td>
            <td><input type="Password" name="password" id="Password" ></td>
        </tr>

        <tr>
            <td><label for="Email">Email</label></td>
            <td><input type="Email" name="email" id="Email"></td>
        </tr>

        <tr>
            <td><label for="Time">Time</label></td>
            <td><input type="Time" name="time" id="Time"></td>
        </tr>

        <tr>
            <td><label for="Date">Date</label></td>
            <td><input type="Date" name="date" id="date"></td>
        </tr>

        <tr>
            <td><label for="Datetime">Datetime</label></td>
            <td><input type="Datetime" name="datetime" id="Datetime"></td>
        </tr>

        <tr>
            <td><label for="Radio">Radio</label></td>
            <td>
                <input type="radio" value="Male" name="gender" id="male" checked>
                <label for="male">Male</label>
                <input type="radio" value="Female" name="gender"  id="female">
                <lable for="female">Female</lable>
            </td>
        </tr>

        <tr>

        <td><label for="Checkbox">Checkbox</label></td>
        <td>
            <input type="Checkbox"  name="subject[]" id="maths" value="maths" >
            <label for="maths">maths</lable>

            <input type="checkbox" value="english" name="subject[]" id="english">
            <label for="english">english</label>

            <input type="checkbox" value="tamil" name="subject[]" id="tamil">
            <label for="tamil">tamil</label>

            </td>
        </tr>

        <tr>
            <td><label for="Search">Search</label></td>
            <td><input type="Search" name="search" id="Search"></td>
        </tr>

        <tr>
            <td><label for="Number">Number</label></td>
            <td><input type="Number" name="number" id="Number" step="3" min="0" max="10" td>
        </tr>

        <tr>
            <td><label for="Range">Range</label></td>
            <td><input type="Range" name="range" id="Range"></td>
        </tr>

        <tr>
            <td><label for="Month">Month</label></td>
            <td><input type="Month" name="month" id="Month"></td>
        </tr>

        <tr>
            <td><label for="Week">Week</label></td>
            <td><input type="Week" name="week" id="Week"></td>
        </tr>

        <tr>
            <td><label for="Telphonenumber">Telphonenumber</label></td>
            <td><input type="Telphonenumber" name="telphonenumber" id="Telphonenumber"></td>
        </tr>

        <tr>
            <td><lable for="url">url</lable></td>
            <td><input type="url" name="url" id="url"></td>
        </tr>
        <tr>
            <td><lable for="Image">image</lable></td>
            <td><input type="Image" name="image" id="Image" src="{{asset('images/flower.jpg')}}"></td>
        </tr>



        <tr>
            <td><lable for="File">File</lable></td>
            <td><input type="File" name="file" id="File" ></td>

        </tr>
        <tr>
        <td lable for="Select">Select</lable></td>
        <td>
        <select name="select[]" id="select" multiple>
            <option value="10A" selected>10A</option>
            <option value="11A">11A</option>
            <option value="12A">12A</option>
        </select>
        </td>
        </tr>

        <tr>
            <td><label for="Address">address</label></td>
            <td><textarea name="address" id="Address" cols="30" rows="10"></textarea></td>

        </tr>



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

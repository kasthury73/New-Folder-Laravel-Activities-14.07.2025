<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        #header{
            width:100%;
            height: 125px;
            background-color:#FFC1DA;
            text-align:center;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            padding:10px ;
        }

        #sidebar{
            width:20%;
            float: left;
            height: 450px;
            background-color: #F7CFD8;
            text-align:center;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            padding:10px ;
        }

        #content{
            width:80%;
            float: left;
            height: 450px;
            background-color: #A53860;
            text-align:center;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            padding:10px ;
        }

        #footer{
            width:100%;
            float: both;
            height: 125px;
            background-color:#EF88AD;
            text-align:center;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            padding:10px ;

        }

    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12" id="header">header</div>
        </div>

        <div class="row">
            <div class="col-1" id="sidebar">
                @section('sidebar')
            <ol>
                <li><a href="home">home</a></li>
                <li><a href="about">about</a></li>
                <li><a href="photo">photo</a></li>
                <li><a href="contact">contact</a></li>
            </ol>
            @Show
        </div>

        <div class="col-11" id="content">@yield ('content')</div>
        </div>

        <div class="row">
            <div class="col-12" id="footer">footer</div>
        </div>
    </div>

</body>
</html>

{{-- <table >


        <tr>

            <td colspan="2" class="header">header</td>
        </tr>


        <tr>
            <td class="sidebar">
            @section('sidebar')
            <ol>
                <li><a href="home">home</a></li>
                <li><a href="about">about</a></li>
                <li><a href="photo">photo</a></li>
                <li><a href="pages">pages</a></li>
            </ol>
            @Show
        </td>
            <td class="content">@yield ('content')</td>
        </tr>


        <tr>
            <td colspan="2" class="footer">footer</td>
        </tr>
    </table>
</body>
</html> --}}

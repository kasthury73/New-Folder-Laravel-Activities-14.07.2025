<html>
    <head>
        <title>jhope</title>
        <Style>
            h1{
                color: rgb(35, 190, 201);
            }
            td{
                font-size: 22;
                font-family: 'Times New Roman';
            }
        </Style>
    </head>

    <body>
        <table style="border-collapse: collapse;">
            <h1> Details</h1>

                <tr>
                    <td><img src="{{asset('images/jin.jpg')}}"> </td>

                </tr>

            <tr>

                    <td>ID :</td>
                    <td>{{$ID}}</td>
                </tr>
                <tr>
                    <td>Name :</td>
                    <td>{{$Name}}</td>
                </tr>
                <tr>
                    <td>Age :</td>
                    <td>{{$Age}}</td>
                </tr>
                <tr>
                    <td>Phone No :</td>
                    <td>{{$Phone No}}</td>
                </tr>


        </table>
        <hr color="purple">

    </body>
</html>

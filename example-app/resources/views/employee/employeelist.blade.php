
@section('css')

            <style>
            table{
                background-color: rgb(245, 244, 242);
                font-family: 'Times New Roman';
                width:50%;
                text-align:center;
             }

             h1{
                color: black;
                text-align: left;
                font-family: 'Times New Roman';
             }
             </style>


@endsection



    {{-- </head> --}}

    @extends('Layouts.main')

    @section('content')


        <table border="3"  align="left" width="100%">
            <h1><u>Employee List</u></h1>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Employee Name</th>
                <th>Age</th>
                <th>Phone No</th>
                <th>NIC-Number</th>
                <th>Show</th>
            </tr>
            <tr>
                <td>1001</td>
                <td><img src="{{asset('images/jimin.jpg')}}" width="88"></td>
                <td>Jimin</td>
                <td>20</td>
                <td>200545014569</td>
                <td>0770212365</td>
                <td><a href="employee/employeelist">Jimin Details</a></td>
            </tr>
            <tr>
                <td>1002</td>
                <td><img src="{{asset('images/V.jpg')}}" width="88.5"></td>
                <td>Taehyung</td>
                <td>21</td>
                <td>200444214561</td>
                <td>0760212365</td>
                <td><a href="employee/employeelist">Taehyung Details</a></td>
            </tr>
            <tr>
                <td>1003</td>
                <td><img src="{{asset('images/jungkooki.jpg')}}" width="90.5"></td>
                <td>Jungkook</td>
                <td>23</td>
                <td>200244544539</td>
                <td>0750242165</td>
                <td><a href="employee/employeelist">Jungkook Details</a></td>
            </tr>
            <tr>
                <td>1004</td>
                <td><img src="{{asset('images/yongi.jpg')}}" width="90.5"></td>
                <td>Suga</td>
                <td>21</td>
                <td>200444514329</td>
                <td>0770243565</td>
                <td><a href="employee/employeelist">Suga Details</a></td>
            </tr>

        </table>


    @endsection






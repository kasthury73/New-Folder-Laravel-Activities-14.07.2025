
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

    @extends('Layouts.master')

    @section('content')





        <table border="3"  align="left">
            <h1><u>Employee List</u></h1>
            <tr>
                <th>1000</th>

                <th>Employee Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Show</th>
            </tr>
            <tr>
                <td>1001</td>

                <td>Jhope</td>
                <td>29</td>
                <td>+8224589745</td>
                <td><a href="employeedetail/1001/Jhope/30/+8223589645">Jhope Details</a></td>
            </tr>
            <tr>
                <td>1002</td>

                <td>Jimin</td>
                <td>30</td>
                <td>+8223589645</td>
                <td><a href="/employeedetail/1002/jimin/30/+8223589645">Jimin Details</a></td>
            </tr>
            <tr>
                <td>1003</td>

                <td>Jungkook</td>
                <td>20</td>
                <td>+8214529745</td>
                <td><a href="/employeedetail/1003/jungkook/20/+8214529745">Jungkook Details</a></td>
            </tr>
            <tr>
                <td>1004</td>

                <td>Suga</td>
                <td>31</td>
                <td>+8234579745</td>
                <td><a href="/employeedetail/1004/suga/31/+8234579745">Suga Details</a></td>
            </tr>

        </table>


    @endsection






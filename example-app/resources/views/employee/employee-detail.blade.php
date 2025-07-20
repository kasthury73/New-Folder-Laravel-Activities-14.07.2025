<html>
<head>
    <title>jhope</title>
    <style>
        h1 {
            color: rgb(35, 190, 201);
        }
        td {
            font-size: 22px;
            font-family: 'Times New Roman';
        }
    </style>
</head>

<body>
    <h1>Details</h1>
    <table style="border-collapse: collapse;">
        <tr>
            <td><img src="{{ asset('images/jimin.jpg') }}" width="200"></td>
        </tr>

        <tr>
            <td>ID :</td>
            <td>{{ $ID }}</td>
        </tr>

        <tr>
            <td>Name :</td>
            <td>{{ $Name }}</td>
        </tr>

        <tr>
            <td>Age :</td>
            <td>{{ $Age }}</td>
        </tr>

        <tr>
            <td>Phone No :</td>
            <td>
                @php
                    $converted = Str::substr($Number, 0, 3);
                @endphp

                @if ($converted === "077")
                    Dialog number
                @elseif ($converted === "075")
                    Airtel number
                @else
                    SLT number
                @endif
            </td>
        </tr>

        <tr>
            <td>NIC-Number:</td>
            <td>
                @php
                    $length = Str::length($NICNo);
                @endphp

                @if ((int)$length == 10)
                    @php
                        $dayNumber = Str::substr($NICNo, 2, 3);
                        $year = (int)Str::substr($NICNo, 0, 2);
                        $gender = "Male";
                        if ($dayNumber > 500) {
                            $dayNumber -= 500;
                            $gender = "Female";
                        }
                        $year = ($year >= 20) ? (1900 + $year) : (2000 + $year);
                    @endphp
                @elseif ((int)$length == 12)
                    @php
                        $year = (int)Str::substr($NICNo, 0, 4);
                        $dayNumber = (int)Str::substr($NICNo, 4, 3);
                        $gender = "Male";
                        if ($dayNumber > 500) {
                            $dayNumber -= 500;
                            $gender = "Female";
                        }
                    @endphp
                @else
                    Invalid NIC Number Format
                @endif

                <br>
                Gender: {{ $gender }}<br>

                @php
                    $monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                    $month = 1;
                    $day = $dayNumber;
                    foreach ($monthDays as $i => $days) {
                        if ($day <= $days) {
                            $month = $i + 1;
                            break;
                        } else {
                            $day -= $days;
                        }
                    }

                    $age = date('Y') - $year;
                @endphp

                Birthdate: {{ $year }}/{{ $month }}/{{ $day }}<br>
                Age is {{ $age }}
            </td>
        </tr>

        <tr>
            <td colspan="2">
                @php
                    $data = [
                        'id' => $ID,
                        'name' => $Name,
                        'number' => $Number,
                        'nic-no' => $NICNo
                    ];
                @endphp

                @foreach ($data as $key => $value)
                    <span>{{ ucfirst($key) }}: {{ $value }}</span><br>
                @endforeach
            </td>
        </tr>
    </table>
    <hr color="purple">
</body>
</html>












{{-- ---------------------------------------------------------------------}}

{{-- First error code --}}
{{-- syntax error, unexpected token "=>"

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
                    <td><img src="{{asset('images/jimin.jpg')}}" width="200"> </td>
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
                    <td>
                        @php
                            $converted = Str::substr($Number,0,3);
                        @endphp

                        @if($converted === "077")
                        Dialog number
                        @elseif($converted === "075")
                        Airetel number
                        @else
                        Slt number
                        @endif
                    </td>
                </tr>
                    <td>NIC-Number </td>
                    <td>
                        @php
                        $length = Str::length($NICNo);
                        @endphp

                        @if((int)$lenght == 10)

                        @php
                        $dayNumber = Str::substr($NICNo,2,3);
                        @endphp

                            @if($dayNumber>500)
                                $dayNumber-=500
                                Female
                            @else
                                Male
                            @endif
                        @php
                        $year = Str::substr($NICNo,0,2);
                        $year = ($year >= 20)?
                        1900 + $year : 2000 + $year
                        @endphp

                        @elseif($length == 12)

                        @php
                        $year = Str::substr($NICNo,0.4);
                        $dayNumber=Str::substr($NICNO,4,3);
                        @endphp

                        @if($dayNumber>500)
                            $dayNumber -=500;
                            Female
                        @else
                            Male
                        @endif
                        @else
                        Invalid NIC Number Format;
                        @endif

                        <br>

                        @php
                        $monthDays=[31,28,31,30,31,30,31,31,30,31,30,31];
                            $month =1;
                            $day = $dayNumber;
                            foreach ($monthDays => $days){
                                if($day <= $days){
                                    $month = $m+1;
                                    break;
                                }
                                else{
                                    $day -= $days;
                                }
                                }
                        @endphp

                        {{$year}}/{{$month}}/{{$day}}

                        <br>

                        @php
                        $age = (int)date('y')-(int)$year;
                        @endphp
                        <span>Age is {{$age}} </span>

                        <br>
                        </td>
                        @php
                        $data = ['id'=> $id, 'name' =>$name 'number'=>$number 'nic-no'=>$NICNo];
                        @endphp
                        @foreach ($data as $key => $value)
                        <span>{{$value}}</span>
                        <br>
                        @endforeach
                        </tr>
                    </td>
                <tr>
                    <td>

                    </td>
                </tr>
        </table>
        <hr color="purple">

    </body>
</html> --}}

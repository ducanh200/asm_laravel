<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            width: 1000px;
            margin: auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 80px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Telephone</th>
    </tr>
    <tr>
        @foreach($student as $item)
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->telephone}}</td>
        @endforeach
    </tr>


</table>
<a style="float: right" href="{{url("create")}}"><button style="background-color: #069bea;margin-top: 10px;border-radius: 5px;padding: 5px" >Create Student</button> </a>
</body>
</html>


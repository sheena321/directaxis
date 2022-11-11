<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <!-- @if(isset($key1))
   {{$key1}}
   @endif -->
   <table border=3 align="center">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>DOB</th>
        <th>ADDRESS</th>
        <th colspan=2>action</th>
    </tr>
    @foreach($key1 as $i)
    <tr>
    <td>{{$i->id}}</td>
    <td>{{$i->name}}</td>
    <td>{{$i->email}}</td>
    <td>{{$i->phone}}</td>
    <td>{{$i->date}}</td>
    <td>{{$i->address}}</td>
    <td><a href="{{url('delete')}}/{{$i->id}}">delete</a></td>
    <td><a href="{{url('update')}}/{{$i->id}}">update</a></td>
    </tr>
@endforeach
   </table>
</body>
</html>
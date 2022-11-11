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
    <!-- @if(isset($key2))
    {{$key2}}
    @endif -->
    <form action="{{url('update1')}}/{{$key2->id}}" method="post">
        @csrf
        <div class="container" style='background-color:grey;align:center'>
        <div class="row">
            <div class="col-12">

        <h2 style="text-align:center">form</h2>

        <label for="">Enter name</label>
        <input type="text" name="name" id="" value="{{$key2->name}}"><br><br>

        <label for="">Enter email</label>
        <input type="email" name="email" id="" value="{{$key2->email}}"><br><br>

        <label for="">Enter phone</label>
        <input type="text" name="ph" id="" value="{{$key2->phone}}"><br><br>

        <label for="">Enter dob</label>
        <input type="date" name="date" id="" value="{{$key2->date}}"><br><br>

        <label for="">Enter address</label>
        <input type="text" name="add" id="" value="{{$key2->address}}"><br><br>

        <button type="submit">submit</button>
        </div>
        </div>
        </div>
         </form>
</body>
</html>
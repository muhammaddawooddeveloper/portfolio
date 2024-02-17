<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>All tacher record</title>
</head>
<body class="container">
  <div class="col-6">
    <table class="table col-5">
        <h2>RECORD OF TEACHERS</h2>
        <a href="{{route('teacherrecord')}}" class="btn btn-primary">HOME</a>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>IMAGE</td>
        </tr>
        @foreach ($data as $id => $users )

            <tr>
              <th>{{$users->id}}</th>
              <th>{{$users->name}}</th>
              <th>
                  <img height="60px" src="{{ asset('storage/' . $users->image)}}" alt="teache  image">
              </th>
           </tr>
        @endforeach

    </table>
  </div>
</body>
</html>
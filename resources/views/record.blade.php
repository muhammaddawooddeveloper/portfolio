<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my portfolio record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .text{
            background: linear-gradient(360deg,green,blue,red);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        }
    </style>
</head>

<body>
    <div class="container text-center align-content-center ">
        <h2 class="text-danger text ">All record of my portfolio website</h2>
        <a href="/port" class="btn btn alert-danger ">ADD</a>

        <table class="table table-hover table-bordered ">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                {{-- <th>View</th> --}}
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @foreach ($data as $item)

             <tr>
                 <td>{{ $item->id }}</td>
                 <td>{{ $item->name }}</td>
                 <td>{{ $item->email }}</td>
                 {{-- <td><a href="{{route('',$data->id) }}" class="btn btn-info ">view</a></td> --}}
                 <td><a href="{{ route('delete' , $item->id) }}" class="btn btn-danger ">Delete</a></td>
                 <td>
                    <a href="{{ route('update', ['id' => $item->id]) }}" class="btn btn-success">Update</a>
                </td>

                 {{-- <td><a href="{{ route('update' , $item->id) }}" class="btn btn-success ">update</a></td> --}}
             </tr>

            @endforeach

        </table>
        <div>
            {{-- {{ $dawood->links('pagination::bootstrap-5') }} --}}
            {{ $data->links('pagination::bootstrap-5') }}

           {{-- {{ $data->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>
</body>
</html>

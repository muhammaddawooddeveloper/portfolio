<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>update teacher record</title>
</head>
<body>
    <div class="container ">
        {{-- <form action="{{ route('update',  $data->id )}}"  method="POST" enctype="multipart/form-data"> --}}
            <form action="{{ route('update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">NAME</label><br>
                <input type="text" value="{{$data->name}}" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label><br>
                <input type="file" name="image" id="image" accept="image/*">

                @if ($data->image)
                <img src="{{ asset('storage/'. $data->image) }}" alt="Current Teacher Image" width="60px">
                @else
                 <p>No current image</p>
                @endif

            </div>
            <button  class="btn btn-warning">update</button>
        </form>
    </div>
</body>
</html>

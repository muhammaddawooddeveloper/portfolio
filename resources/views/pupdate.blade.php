<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update record</title>
</head>
<body>
    <div>
        <!-- Update Form -->
{{-- <form method="POST" action="{{ route('portfolio.update', ['id' => $data->id]) }}"> --}}
{{-- <form action="" method="POST"> --}}
    <form method="POST" action="{{ route('dawood.update', $data->id) }}">
        {{-- <form action="{{ route('update', $data->id) }}" method="POST" enctype="multipart/form-data"> --}}

    @csrf
    <!-- Name Input -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
    </div>

    <!-- Email Input -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Update</button>
</form>

    </div>
</body>
</html>

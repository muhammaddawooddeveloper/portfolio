<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>All tacher record</title>
    {{-- <style>
         /* .image {
                filter: grayscale(50%) brightness(120%);
            }
            .container{
              /* backdrop-filter: blur(5px); */
              /* background-color: rgba(228, 65, 65, 0.5); Semi-transparent background */

            }
            body{
                background: black;
            }
            section{

            }
            h1{
                position: absolute;
                color: #ddd;
                font: 300;
                letter-spacing: 0.2em;

            } */

    </style> --}}
</head>
<body class="container ">


    <table class="table table-hover table-bordered " style="background: darkmagenta">

        <h2>RECORD OF ALL TEACHERS</h2>

      <a href="/ad" class="btn btn-primary">Add New Teacher</a>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>IMAGE</td>
            <td>view</td>
            <td>update</td>
            <td>delete</td>
        </tr>
           {{-- Your HTML code --> --}}
           @foreach($data as $teacher)
           <tr>
               <td>{{ $teacher->id }}</td>
               <td>{{ $teacher->name }}</td>
               <td>
                <img class="image" height="60px" src="{{ asset('storage/' . $teacher->image) }}" alt="Teacher Image">
                   {{-- <img class="image" height="60px" src="{{ asset('storage/'. $teacher->image) }}" alt="Teacher Image"> --}}
               </td>
               <td><a href="{{route('viewteacher', $teacher->id)}}" class="btn btn-success">view<a>
               </td>
               <td><a href="{{route('edit', $teacher->id)}}" class="btn btn-primary">update</a></td>
               <td>
                <a href="{{route('delete', $teacher->id) }}" class="btn btn-danger delete-btn" data-id="{{ $teacher->id }}">delete</a>
                </td>

               {{-- <td><a href="{{route('delete', $teacher->id) }}"  class="btn btn-danger">Delete</a><td> --}}
           </tr>
       @endforeach

    </table>
    <div>
        {{ $data->links('pagination::bootstrap-5') }}

    </div>

</body>

<script>
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const id = this.getAttribute('data-id');    //jis id pr click ho ga is ki value const id main store kr dy ga
            const confirmDelete = confirm("Are you sure you want to delete?");

            if (confirmDelete) {
                // If user confirms deletion, redirect to the delete route
                window.location.href = `/delete/${id}`;
            }
            else {
                // If user cancels, do nothing
                console.log('Deletion canceled')
            }
        });
    });

</script>

    {{-- <p>&#128527;</p>
    <p>&#128525;</p>
    <p>&#128521;</p>
    <p>&#128522;</p>
    <p>&#128523;</p>
    <p>&#128528;</p>
    <p>&#128529;</p>
    <p>&#128530;</p>
    <p>&#128531;</p>
    <p>&#128532;</p>
    <p>&#128533;</p>
    <p>&#128534;</p> --}}
</html>

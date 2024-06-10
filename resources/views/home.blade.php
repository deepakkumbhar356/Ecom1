 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD Query Builder</title>
 </head>
 <body>
 <div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form action="" method= "POST">
                @csrf 
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-controller" id= "name" 
                    name="name">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city"
                    name="city">
                </div>
                <div class="mb-3">
                    <label for="marks" class="form-label">Marks</label>
                     <input type="text" class="form-control" id="marks"
                     name="marks">
                </div>
                <button type="submit" class=" btn-btn-primary">Submit</button>
            </form>
            @if (session()-> has('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        </div>
        <div class="col-sm-6">
         <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $stu)
                <tr>
                    <th>{{ $stu->id }}</th>
                     <td>{{ $stu->name }}</td>
                     <td>{{ $stu->city }}</td>
                     <td>{{ $stu->marks }}</td>
                     <td>
                        <a href="{{ url('/edit',$stu->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{ url('/delete',$stu->id) }}" class="btn btn-danger btn-sm">Delete</a>
                     </td>
                </tr>
                @endforeach 
            </tbody>
         </table>
        </div>
    </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
 </html>
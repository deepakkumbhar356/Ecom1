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
               @method('PUT')
               <div class="mb-3">
                   <label for="name" class="form-label">Name</label>
                   <input type="text" class="form-controller" id= "name" 
                   name="name" value="{{ $student->name }}">
               </div>
               <div class="mb-3">
                   <label for="city" class="form-label">City</label>
                   <input type="text" class="form-control" id="city"
                   name="city" value="{{ $student->city }}">
               </div>
               <div class="mb-3">
                   <label for="marks" class="form-label">Marks</label>
                    <input type="text" class="form-control" id="marks"
                    name="marks" value="{{ $student->marks }}">
               </div>
               <button type="submit" class=" btn-btn-primary">Update</button>
           </form>
           @if (session()-> has('status'))
               <div class="alert alert-success">
                   {{ session('status') }}
               </div>
           @endif

       </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
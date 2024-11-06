{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1>Image Gallery</h1>
    
    <div class="gallery">
        @foreach ($user as $photo)
            <div>
                <img src="{{ Storage::url($photo->image_path) }}" alt="Image">
            </div>
        @endforeach
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #9a8888;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #f8f4f4;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    {{-- @if (session('images'))
        <h3>Uploaded Images:</h3>
        @foreach (session('images') as $image)
            <img src="{{ Storage::url($image) }}" alt="Uploaded Image" width="100">
        @endforeach
    @endif --}}
    <h1>Image Table</h1>
    <a href="{{ route('register') }}" class="btn btn-primary">Add User</a>

    @if (session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success')}}
        </div>

        <script>
            setTimeout(function() {
                document.getElementById('success-alert').style.display = 'none';
            }, 3000); // Disappear after 3 seconds
        </script>
    @endif


    {{-- <form action="{{ route('viewimages') }}" method="POST" enctype="multipart/form-data"> --}}
    {{-- @csrf --}}
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Uploader Images</th>
                <th colspan="2">Action</th>
                {{-- <th>Uploaded At</th> --}}
            </tr>
        </thead>
        <tbody>

            @foreach ($users ?? [] as $photo)
                {{-- dd($photo);    --}}
                <tr>
                    <td>{{ $photo->id }}</td>
                    <td>{{ $photo->name }}</td>
                    <td>
                        @php
                            $arrImg = explode(',', $photo->image_path);
                            foreach ($arrImg as $img) {
                                echo '<img src="' . asset('storage/' . $img) . '" alt="Image" width="100">';
                            }
                        @endphp
                        {{-- <img src="{{ asset('storage/' . $photo->image_path) }}" alt="Image"> --}}
                    </td>
                    <td>
                        {{-- <button class="btn btn-warning">Show</button> --}}

                        {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                            data-target="#exampleModal"
                            onclick="openModel('{{ $photo->id }}','{{ $photo->image_path }}')">
                            Show Images
                        </button>                         --}}

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                        onclick="openModel('')">
                            
                            Show Images</button>
                    </td>
                    <td>
                        <button class="btn btn-danger" onclick="confirmDelete({{ $photo->id }})">Delete</button>
                    </td>

                    {{-- <td>{{ $photo->created_at->format('F j, Y, g:i a') }}</td> --}}
                </tr>
            @endforeach

        </tbody>
    </table>
    {{-- </form> --}}

</body>
<script>
    function confirmDelete(userId) {
        // Show confirmation popup
        if (confirm('Are you sure you want to delete this user?')) {
            // Redirect to delete route with the user ID
            window.location.href = `/deleteUser/${userId}`;
        }
    }
</script>

</html>

{{-- model --}}
 {{-- <div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Post Page</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> 
                    <form action="{{route('updatePost')}}" method="POST" enctype="multipart/form-data">
                     {{-- <form action="" method="POST" enctype="multipart/form-data"> --}}

                        {{-- @csrf
                        {{-- @method('PATCH') --}}

                         {{-- <input type="hidden" name="id" id="id">

                        <div class="custom-file form-group">
                            <img src="{{ asset('/storage/' .$photo->image_path) }}" class="img-thumbnail img-fluid"
                                style="width: 120px">
                            <input type="file" name="image_path" accept=".jpg,.png,.jpeg" class="form-control" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">UpdatePost</button>
                        </div> 


                     </form>  -
                </div>

            </div>
        </div>
    </div>

</div>   --}} 

{{-- model2 --}}
<div class="container">
    <h2>Modal Example</h2>
    <!-- Trigger the modal with a button -->
   
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Showing Images</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    
  </div> 
  
  

<script>
    function openModel(id, image_path) {
        $('#id').val(id);
        // $('#name').val(name);
        // // $('#description').val(description);
        // // $('#image_path').val(image_path);
        $('#image_path').attr('src', image_path);
        // $('#published_date').val(published_date);
        $('#exampleModal').modal('show');
    }
</script>

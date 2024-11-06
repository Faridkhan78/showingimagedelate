<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-md-6">
            <h2>Upload Images</h2>
            <form action="{{ route('images') }}" method="POST" enctype="multipart/form-data">
                {{-- <form action="" method="POST" enctype="multipart/form-data"> --}}
                @csrf
                <label for="name">Names</label>
                <input type="text" name="name" class="form-control">
                <label for="images">Choose Images</label>
                <input type="file" name="image_path[]" multiple class="form-control">
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Upload Images</button>
                    <a href="{{ route('viewimages') }}" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

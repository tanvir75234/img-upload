<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="{{ route('submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control mt-3" name="name" placeholder="Please enter your name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Phone</label>
                        <input type="number" class="form-control mt-3" name="phone" placeholder="Please enter your phone">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control mt-3" name="email" placeholder="Please enter your email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control mt-3" name="pic" placeholder="Please enter your image">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
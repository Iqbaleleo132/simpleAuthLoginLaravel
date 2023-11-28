<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
    </div>
    @endif
</head>
<body>


    <div class="container my-auto w-50 overflow-visible ">
        <div class="bg-white rounded-1 shadow border border-1  ">
            <div class="container-fluid py-3">
                <p class="m-0 px-3 py-1 ">
                    <span class="text-secondary fs-2">
                        Welcome back!
                    </span>
                </p>
            </div>
            <div class="container-fluid">
                <p class="text-dark fs-5 fw-bold font-family-Mulish  m-0 px-3 py-2">
                    Sign in to your account
                </p>

                @foreach ($errors->all() as $item)
                <div class="alert alert-primary" role="alert">
                    SILAHKAN DIULANG LAGI
                </div>
                    
                @endforeach
            </div>
        <form action="" method="POST">
            @csrf
            <div class="px-4 mb-4">
                <label for="" class="form-label">Username</label>
                <input class="form-control" type="text" value="{{ old('nama') }}" name="nama">
            </div>
            <div class="px-4 mb-4">
                <label for="" class="form-label">Password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="px-4 mb-4">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
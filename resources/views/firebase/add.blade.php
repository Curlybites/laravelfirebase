<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL FIREBASE</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/google-i-o-2016/512/google_firebase-2-512.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ '/' }}">Laravel Firebase</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ '/' }}">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Add</a>
                  </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-sm-center justify-content-between">
                            <h5 class="pt-2">Add Account</h5>
                            <a href="{{ url('/') }}" class="btn btn-sm btn-primary float-end d-flex align-items-center py-2 px-3"><span class="material-icons-sharp fs-6 ">
                                arrow_back_ios
                                </span>Back</a>
                        </div>
                        <div class="card-body col-9 align-self-center">
                            <form action="{{ url('add-account') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="formGroupExampleInput" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name"
                                        id="formGroupExampleInput" placeholder="Please input your First Name">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name"
                                        id="formGroupExampleInput" placeholder="Please input your Middle Name">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name"
                                        id="formGroupExampleInput" placeholder="Please input your Last Name">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        id="formGroupExampleInput" placeholder="example@gmail.com">
                                </div>

                                <div class="form-group mb-3">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

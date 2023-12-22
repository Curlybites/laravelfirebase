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
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    
                      @if (session('status'))
                        <h5 class="alert alert-success mb-2"><span class="material-icons-sharp">
                          check_circle
                          </span> {{ session('status') }}</h5>
                      @endif

                        <div class="card">
                            <div class="card-header d-flex align-items-sm-center justify-content-between">
                                <h5 class="pt-2">Account List</h5>
                                <a href="{{ url('add-account') }}" class="btn btn-sm btn-primary float-end d-flex align-items-center" >  
                                <span class="material-icons-sharp px-1">add_circle_outline</span>Add Account</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-success table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">middle Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @php 
                                            $i = 1;
                                        @endphp

                                        @forelse ($account as $key => $item)
                                            <tr>
                                                 <td>{{ $i++ }}</td>
                                                 <td>{{ $item['fname'] }}</td>
                                                 <td>{{ $item['mname'] }}</td>
                                                 <td>{{ $item['lname'] }}</td>
                                                 <td>{{ $item['email'] }}</td>
                                                 <td>
                                                    <a href="{{ url('edit-account/'.$key) }}"class="btn btn-success">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                 </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" >No Account Record Found</td>
                                            </tr>
                                        @endforelse
                                    
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
          </main>
    
</body>
</html>
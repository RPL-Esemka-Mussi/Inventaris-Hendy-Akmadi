<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-5 mt-5">
                <div class="shadow p-5 mt-2 bg-body rounded">
                    <h1 class="text-center fw-bolder">Login</h1>
                    @if(!empty(session('login')))
                    <div class="alert alert-danger text-center fst-italic fs-6">
                        {{ session('login')}}
                    </div>
                    @endif

                    @if(!empty(session('logout')))
                    <div class="alert alert-primary text-center fst-italic fs-6">
                        {{ session('logout')}}
                    </div>
                    @endif


                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <div class="form-group mt-5">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <div class="float-end mt-4">
                            <p class="text-center">Don't have account
                            <a href="{{url('userbaru')}}" class="link-primary fst-italic">Here</a>
                            </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>

</html>
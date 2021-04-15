<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Dashboard Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="#">Inventario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fw-bolder">
                        <a class="nav-link active" aria-current="page" href="{{ url('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('user')}}">User</a>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('barang')}}">Barang</a>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('laporan')}}">Laporan</a>
                    <li class="nav-item dropdown ms-3-md">
                        <a class="nav-link dropdown-toggle fw-bolder" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>

                        <ul class="dropdown-menu fw-bolder" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-center fw-bolder" href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<h1 class="fw-bolder text-center mt-5">Selamat Datang</h1>
    <h1 class="fw-bolder text-center mt-4">
        <div id="textDestination"></div>
            </h1>
    
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table table-striped table-hover mt-5">
                    <h1 class="fw-bolder mt-5">Data</h1>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Data</th>
                        <th>Jumlah</th>
                        <th>Detail</th>
                    </tr>


                    <tr class="text-center">
                        <th>1</th>
                        <td> User </td>
                        <td>{{ $user }}</td>
                        <th><a href="{{'user'}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-folder-symlink" viewBox="0 0 16 16">
                                    <path d="m11.798 8.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z" />
                                    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm.694 2.09A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09l-.636 7a1 1 0 0 1-.996.91H2.826a1 1 0 0 1-.995-.91l-.637-7zM6.172 2a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                                </svg> </th>
                    </tr>

                    <tr class="text-center">
                        <th>2</th>
                        <td> Barang </td>
                        <td>{{ $barang }}</td>
                        <th><a href="{{'barang'}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-folder-symlink" viewBox="0 0 16 16">
                                    <path d="m11.798 8.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z" />
                                    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm.694 2.09A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09l-.636 7a1 1 0 0 1-.996.91H2.826a1 1 0 0 1-.995-.91l-.637-7zM6.172 2a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                                </svg> </th>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script language="JavaScript">
        var text = "{{auth()->user()->name}}";
        var delay = 5000;
        var currentChar = 1;
        var destination = "[none]";

        function type() {
            //if (document.all)
            {
                var dest = document.getElementById(destination);
                if (dest) // && dest.innerHTML)
                {
                    dest.innerHTML = text.substr(0, currentChar) + "<blink>_</blink>";
                    currentChar++;
                    if (currentChar > text.length) {
                        currentChar = 1;
                        setTimeout("type()", 3000);
                    } else {
                        setTimeout("type()", delay);
                    }
                }
            }
        }

        function startTyping(textParam, delayParam, destinationParam) {
            text = textParam;
            delay = delayParam;
            currentChar = 1;
            destination = destinationParam;
            type();
        }
    </script> <b>
    </b>
    <script language="JavaScript">
        javascript: startTyping(text, 50, "textDestination");
    </script>
</body>

</html>
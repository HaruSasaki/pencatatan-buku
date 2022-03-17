<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c47bf836a3.js" crossorigin="anonymous"></script>

    <title>Pencatatan Buku</title>
</head>

<body>
    <div class="container mt-4" style="display: flex; justify-content: center; align-item:center;">
        @if (session('success'))
        <script>
        alert("{{ session('success') }}");
        </script>
        @endif

        @if ($errors->any())
                <script>
                @foreach ($errors->all() as $error)
                alert("{{ $error }}");
                @endforeach
                </script>
            </ul>
        </div>
        @endif
        @yield ('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer>
    <div class="container mt-4" style="display: flex; justify-content: center; align-item:center;">
    <p> Made with love by <i>Iqbal Abdurrahman</i> (XI RPL 1) - <a href="mailto:iqbalabdurrahman04@gmail.com">Contact Me!</a></p>
    </div>
</footer>

</html>
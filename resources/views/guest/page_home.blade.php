<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
</head>

<body class="body">
    <nav class="navbar navbar-expand-lg " id="navbar">
        <a class="navbar-brand" style="color:white;" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/bwi.PNG') }}" alt="Logo" width="50" height="70">
            DESA LABANASEM
        </a>
    </nav>

    <div class="max-w-md mx-auto min-h-screen">
        <div class="row justify-content-center ">
            <div class="col-md-5 col-sm-5 mb-xl-0 mb-5" style="margin-top: 140px;">
                <h3 aligh="center" style="font-weight:bold; font-family: serif; text-align:center; color: #D8E9A8; ">SELAMAT DATANG..</h3>
                <h1 style="font-weight:bold; font-family: serif; text-align:center; color:white;">Pelayanan Digital<br />Melayani Masyarakat.</h1>
                <p style="font-weight:bold; font-family: serif; text-align:center; color:white;">Berkaitan dengan surat menyurat serta memudahkan<br />perangkat desa dalam menyimpan sebuah data</p>
                <div class="row justify-content-center ">
                    <div class="col-md-4 col-sm-6 mb-xl-0 mb-4" style="margin-top: 10px;">
                        <div class="card text-bg-primary mb-3" style="max-width: 30rem;">
                            <div class="card-body">
                                <a href="{{ route('menu') }}" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <img src="{{asset('assets/img/aksen/accent1.png')}}" alt="gambar col" class="position-absolute bottom-0 w-100">
        <img src="{{asset('assets/img/aksen/accent2.png')}}" alt="gambar col" class="position-absolute bottom-0 w-100">
    </div>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    {{-- Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
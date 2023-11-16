<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Sistem Monitoring Kendaraan</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/dataTables.bootstrap4.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/app-light.css') }}" id="lightTheme">
</head>

<body class="vertical  light  ">
    <div class="wrapper vh-100">
      <div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-8 offset-md-4">
                            
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                        
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <small>Belum Punya Akun? <a href="/register">Register</a></small>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    </div> <!-- .wrapper -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/moment.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/simplebar.min.js') }}"></script>
    <script src='{{ asset('template/js/daterangepicker.js') }}'></script>
    <script src='{{ asset('template/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('template/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('template/js/config.js') }}"></script>
    <script src="{{ asset('template/js/d3.min.js') }}"></script>
    <script src="{{ asset('template/js/topojson.min.js') }}"></script>
    <script src="{{ asset('template/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('template/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('template/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('template/js/Chart.min.js') }}"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('template/js/gauge.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('template/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('template/js/apps.js') }}"></script>
    <script src='{{ asset('template/js/dataTables.bootstrap4.min.js')}}'></script>
    <script src='{{ asset('template/js/jquery.dataTables.min.js') }}'></script>
    <script>
        $('#dataTable-1').DataTable(
        {
            autoWidth: true,
            "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
            ]
        });
    </script>
    <script src="{{ asset('template/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>

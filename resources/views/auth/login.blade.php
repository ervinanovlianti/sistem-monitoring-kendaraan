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
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg>
                </a>
                <h1 class="h6 mb-3">Sign in</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control form-control-lg"
                        placeholder="Email address" required="" autofocus="" name="email">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control form-control-lg"
                        placeholder="Password" required="" name="password">
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Stay logged in </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
                <p class="mt-5 mb-3 text-muted">© 2020</p>
            </form>
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

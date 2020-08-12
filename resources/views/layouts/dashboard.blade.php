<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Billex') }}</title>
        <link href="{{ asset('billex/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('billex/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('billex/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('billex/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            @include('dashboard.admin.leftbar.leftside')
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        @include('dashboard.admin.topbar.navbar_header')
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        @include('dashboard.admin.topbar.navbar_right')
                    </ul>
                </nav>
            </div>
            <div class="wrapper wrapper-content">
              @yield('content')
                <div class="footer">
                    @include('dashboard.admin.footer.footer')
                </div>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="{{ asset('billex/js/jquery-2.1.1.js') }}"></script>
        <script src="{{ asset('billex/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('billex/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ asset('billex/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- Custom and plugin javascript -->
        <script src="{{ asset('billex/js/inspinia.js') }}"></script>
        <!-- jQuery UI -->
        <script src="{{ asset('billex/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    </body>
</html>

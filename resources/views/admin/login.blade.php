<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="" name="description">
    <meta content="Firoz Ansari 8789701916" name="author">
    <meta name="keywords" content="" />

    <title>Login | {{config('app.name')}}</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/img/fav.png') }}" type="image/x-icon" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!--Style css-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    <!--Icons css-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}">

    <!-- P-Scrollbar css-->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/p-scroll/p-scroll.css') }}">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.css') }}">

    <!-- Sidemenu-responsive-tabs  css -->
    <link href="{{ asset('admin/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}"
        rel="stylesheet">

    <!-- Siderbar css-->
    <link href="{{ asset('admin/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- Color-skins css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('admin/assets/colors/color-skins/color.css') }}" />

</head>

<body class="bg-primary">

    <!--app open-->
    <div id="app" class="page">
        <div class="page-content">
            <div class="container">
                <!--single-page open-->
                <div class="single-page">
                    <div class="wrapper wrapper2">
                        <form action="{{ route('admin-login') }}" method="POST" id="login" class="card-body"
                        tabindex="500">
                        @csrf
                        <h3 class="text-dark">Login</h3>
                        @include('admin.layout.notifications')
                            <div class="mail">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email">
                            </div>
                            <div class="passwd">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <!--	<p class="mb-3 text-right"><a href="#">Forgot Password</a></p> -->
                            <div class="submit">
                                <button type="submit" class="btn btn-primary">Log In</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!--single-page closed-->
            </div>
        </div>
    </div>
    <!--app closed-->

    <!--Jquery.min js-->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

    <!--popper js-->
    <script src="{{ asset('admin/assets/js/popper.js') }}"></script>

    <!--Bootstrap.min js-->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Tooltip js-->
    <script src="{{ asset('admin/assets/js/tooltip.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="login.">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('image/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">

</head>

<body class="">

<!-- PAGE CONTAINER -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div id="root" class="root front-container">

    <!-- CONTENTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section id="content" class="content">
        <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <div class="content__wrap">

                <!-- Login card -->
                <div class="card shadow-lg">
                    <div class="card-body">

                        <div class="text-center">
                            <h1 class="h3">Account Login</h1>
                            <p>Sign In to your account</p>
                        </div>

                        <form class="mt-4" method="post">

                            <div class="mb-3">
                                <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{$errors->email ?? ''}}" placeholder="Email" name="email">
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <input class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password" type="password" placeholder="Password">
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('password')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-check">
                                <input id="_dm-loginCheck" class="form-check-input" type="checkbox">
                                <label for="_dm-loginCheck" class="form-check-label">
                                    Remember me
                                </label>
                            </div>

                            <div class="d-grid mt-5">
                                <button class="btn btn-primary btn-lg" type="submit">Sign In</button>
                            </div>
                        </form>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="" class="btn-link text-decoration-none">Forgot password ?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                            <h5 class="m-0">Login with</h5>

                            <!-- Social media buttons -->
                            <div class="ms-3">
                                <a href="#" class="btn btn-sm btn-icon btn-hover btn-primary text-inherit">
                                    <i class="demo-psi-facebook fs-5"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-hover btn-info text-inherit">
                                    <i class="demo-psi-twitter fs-5"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-hover btn-danger text-inherit">
                                    <i class="demo-psi-google-plus fs-5"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-hover btn-warning text-inherit">
                                    <i class="demo-psi-instagram fs-5"></i>
                                </a>
                            </div>
                            <!-- END : Social media buttons -->

                        </div>

                    </div>
                </div>
                <!-- END : Login card -->


            </div>
        </div>
    </section>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - CONTENTS -->
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- END - PAGE CONTAINER -->


<!-- JAVASCRIPTS -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!-- Bootstrap JS [ OPTIONAL ] -->
<script src="{{asset('js/bootstrap.min.js')}}" defer></script>
<script src="{{asset('js/main.min.js')}}" defer></script>

</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/auth.css" rel="stylesheet">
</head>

<body>
<form class="form-signin" method="post">
    <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Create an Account</h1>
    </div>

    <div class="form-label-group">
        <input name="name" type="text" id="inputName" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{$errors->name ?? ''}}" placeholder="Your Name" autofocus>
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
        <label for="inputName">Username</label>
    </div>

    <div class="form-label-group">
        <input name="email" type="email" id="inputEmail" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{$errors->email ?? ''}}" placeholder="Email address" required autofocus>
        @if($errors->has('email'))
            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
        @endif
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input name="password" type="password" id="inputPassword" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"" placeholder="Password" required>
        @if($errors->has('password'))
            <div class="invalid-feedback">
                {{$errors->first('password')}}
            </div>
        @endif
        <label for="inputPassword">Password</label>
    </div>

    <div class="form-label-group">
        <input name="confirm_password" type="password" id="inputConfirmPassword" class="form-control {{$errors->has('confirm_password') ? 'is-invalid' : ''}}" placeholder="Password" required>
        @if($errors->has('confirm_password'))
            <div class="invalid-feedback">
                {{$errors->first('confirm_password')}}
            </div>
        @endif
        <label for="inputConfirmPassword">Confirm Password</label>
    </div>

    <button class="btn btn-lg btn-dark btn-block" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; gWorks Tech</p>
</form>
</body>
</html>
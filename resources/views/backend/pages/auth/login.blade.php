<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page</title>


    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/backend') }}/images/favicon.png">
    <link href="{{ asset('assets/backend') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link href="{{ asset('assets/backend') }}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="card">
                        <div class="card-body border-6">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="title">Sign In</h1>
                                    <h4>Welcome Admin</h4>
                                </div>
                                <form action="{{ route('admin.login') }}" method="POST">
                                    @csrf

                                    <div class="mb-4">
                                        <label class="mb-1 text-dark">Email<span class="text-danger">*</span></label>
                                        <input type="email"
                                            class="form-control form-control @error('email')
                                        is-invalid
                                        @enderror"
                                            name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>


                                    <div class="mb-4 position-relative">
                                        <label class="mb-1 text-dark">Password<span class="text-danger">*</span></label>
                                        <input type="password" id="dz-password"
                                            class="form-control @error('password')
                                        is-invalid
                                        @enderror"
                                            name="password">
                                        @error('password')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="mb-4">
                                            <div class="form-check custom-checkbox mb-3">
                                                <input type="checkbox" class="form-check-input" name="remember_me"
                                                    id="customCheckBox1">
                                                <label class="form-check-label" for="customCheckBox1">Remember my
                                                    preference</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mb-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/backend') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/custom.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>

</html>

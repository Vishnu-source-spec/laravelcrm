<!doctype html>
<html lang="en">
<head>
    <title>Register | Able Pro Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="Phoenixcoded" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="../assets/fonts/feather.css" />
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../assets/fonts/material.css" />
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="../assets/css/style-preset.css" />
</head>
<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
    <div class="page-loader">
        <div class="bar"></div>
    </div>
    <div class="auth-main">
        <div class="auth-wrapper v2">
            <div class="auth-sidecontent">
                <img src="../assets/images/authentication/img-auth-sideimg.jpg" alt="images" class="img-fluid img-auth-side" />
            </div>
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="#"><img src="../assets/images/logo-dark.svg" alt="img" /></a>
                            <div class="d-grid my-3">
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="../assets/images/authentication/facebook.svg" alt="img" /> <span>Sign Up with Facebook</span>
                                </button>
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="../assets/images/authentication/twitter.svg" alt="img" /> <span>Sign Up with Twitter</span>
                                </button>
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="../assets/images/authentication/google.svg" alt="img" /> <span>Sign Up with Google</span>
                                </button>
                            </div>
                        </div>
                        <div class="saprator my-3"><span>OR</span></div>
                        <h4 class="text-center f-w-500 mb-3">Sign up with your work email.</h4>
                        @include('front.message')
                        <div class="row">
                            <form action="" name="registrationForm" id="registrationForm">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
                                    <p></p>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" />
                                    <p></p>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                    <p></p>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" />
                                    <p></p>
                                </div>
                                <div class="d-flex mt-1 justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="" />
                                        <label class="form-check-label text-muted" for="customCheckc1">I agree to all the Terms & Condition</label>
                                    </div>
                                </div>
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <h6 class="f-w-500 mb-0">Already have an Account?</h6>
                                <a href="{{route('account.login')}}" class="link-primary">Login here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/fonts/custom-font.js"></script>
    <script src="../assets/js/pcoded.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }


	
});

        $(document).ready(function () {
            $("#registrationForm").submit(function (e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('account.processRegsiteration') }}",
                    type: 'post',
                    data: $("#registrationForm").serializeArray(),
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == false) {
                            var errors = response.errors;
                            if (errors.name) {
                                $("#name").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.name);
                            } else {
                                $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            }
                            if (errors.email) {
                                $("#email").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.email);
                            } else {
                                $("#email").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            }
                            if (errors.password) {
                                $("#password").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.password);
                            } else {
                                $("#password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            }
                            if (errors.confirm_password) {
                                $("#confirm_password").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.confirm_password);
                            } else {
                                $("#confirm_password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            }
                        } else {
                            $("#name, #email, #password, #confirm_password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            //alert("Registration successful");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>

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
                            {{-- <div class="d-grid my-3">
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="../assets/images/authentication/facebook.svg" alt="img" /> <span>Sign Up with Facebook</span>
                                </button>
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="../assets/images/authentication/twitter.svg" alt="img" /> <span>Sign Up with Twitter</span>
                                </button>
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="../assets/images/authentication/google.svg" alt="img" /> <span>Sign Up with Google</span>
                                </button>
                            </div> --}}
                        </div>
                        <div class="saprator my-3"><span>OR</span></div>
                        <h4 class="text-center f-w-500 mb-3">Login with your work email.</h4>
                        @include('front.message')
                        <div class="row">
                            <form action="{{route('account.authenticate')}}" method="post">
                                @csrf {{-- csrf token is must --}}
                               
                                <div class="mb-3">
                                    <input type="email"  name="email" id="email" value="{{old('email')}}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" />
                                    @error('email')
                                    <p class="invalid-feedback">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" />
                                    @error('password')
                                    <p class="invalid-feedback">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="d-flex mt-1 justify-content-end align-items-center">
                                    
                                    <h6 class="text-secondary f-w-400 mb-0">
                                      <a href="forgot-password-v2.html"> Forgot Password? </a>
                                    </h6>
                                </div>
                                
                                <div class="d-grid mt-4">
                                    
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    
                                </div>
                                
                            </form>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
                                <a href="{{route('account.registeration')}}" class="link-primary">Create Account</a>
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

// $.ajaxSetup({
// 	    headers: {
// 	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 	    }


	
// });

        // $(document).ready(function () {
        //     $("#LoginForm").submit(function (e) {
        //         e.preventDefault();

        //         $.ajax({
        //             url: "{{ route('account.authenticate') }}",
        //             type: 'post',
        //             data: $("#LoginForm").serializeArray(),
        //             dataType: 'json',
        //             success: function (response) {
        //                 if (response.status == false) {
        //                     var errors = response.errors;
                           
        //                     if (errors.email) {
        //                         $("#email").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.email);
        //                     } else {
        //                         $("#email").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
        //                     }
        //                     if (errors.password) {
        //                         $("#password").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.password);
        //                     } else {
        //                         $("#password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
        //                     }
                            
        //                 } else {
        //                     $("#name, #email, #password, #confirm_password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            
        //                 }
        //             }
        //         });
        //     });
        // });
    </script>
</body>
</html>

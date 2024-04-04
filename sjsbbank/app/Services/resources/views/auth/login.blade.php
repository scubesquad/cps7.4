<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head><base href="../../../"/>
        <title>CPS LOGIN</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('image/favicon-32x32.png') }}" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
        <style type="text/css">
            #password{
                -webkit-text-security: disc;
                text-security: disc;
            }
            .error{
                color: red;
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="app-blank">
        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Body-->
                <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                    <!--begin::Form-->
                    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-500px p-10 card">
                            <!--begin::Form-->
                            <form  method="POST" action="{{ route('login') }}" class="form w-100" id="saveLoginForm">
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    {{-- <div class="text-gray-500 fw-semibold fs-6">Your CPS Login</div> --}}
                                    <!--end::Subtitle=-->
                                </div>
                                <!--begin::Heading-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input class="form-control bg-transparent" type="text" name="username" value="{{old('username')}}" required autofocus autocomplete="off" placeholder="Username" />
                                    <!--end::Email-->
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-3">
                                    <!--begin::Password-->
                                    <input type="text" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" id="password" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>
                                    {{-- <!--begin::Link-->
                                    <a href="../../demo1/dist/authentication/layouts/corporate/reset-password.html" class="link-primary">Forgot Password ?</a> --}}
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Sign In</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->
                                <!--begin::Sign up-->
                                <!-- <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                                <a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html" class="link-primary">Sign up</a></div> -->
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Form-->
                    
                </div>
                <!--end::Body-->
                <!--begin::Aside-->
                <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                        <!--begin::Logo-->
                        <a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">
                            <img alt="Logo" src="{{ asset('image/logo.jpg') }}" class="h-60px h-lg-75px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Image-->
                        <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset('image/ChquePersonalization.jpg') }}" alt="" />
                        <!--end::Image-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Aside-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        <!--begin::Javascript-->
        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>    

        <script type="text/javascript">
            $(document).ready(function(){
                var frm_user = $('#saveLoginForm');
                $("#saveLoginForm").validate({
                    rules: {
                        username: {
                            required: true,
                        },
                        password: {
                            required: true,
                            minlength: 8
                        },
                    },
                    messages: {
                        username: {
                            required: "Please Enter Username",
                        },
                        password: {
                            required: "Please Enter Password.",
                            minlength: "Minimum 8 Character Allowed"
                        },
                    },
                    submitHandler: function(form) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $('#submit').html('Please Wait...');
                        $("#submit"). attr("disabled", true);
                        $.ajax({
                            url: "{{route('post.login')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                if(response.status){
                                    window.location = response.redirect;
                                }else{
                                    if(response.errors.username != "" && typeof response.errors.username !== "undefined"){
                                        alert(response.errors.username);
                                    }
                                    if(response.errors.password != "" && typeof response.errors.password !== "undefined"){
                                        alert(response.errors.password);
                                    }

                                        swal.fire({
                                            icon : "error",
                                            title: "Error",
                                            text: response.errors   
                                        });
                                    
                                }

                            }
                        });
                    }
                });
            })
                
        </script>
    </body>
    <!--end::Body-->
</html>
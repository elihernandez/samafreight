

<!DOCTYPE html>

<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

    <!-- begin::Head -->
    <head>
        <base href="../../">
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Sama Freight') }}</title>
        <meta name="description" content="User login example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Raleway:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="assets/css/pages/login/login-v2.css" rel="stylesheet" type="text/css" />

        <!--end::Page Custom Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="assets/css/skins/header/navy.css" rel="stylesheet" type="text/css" />

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

        
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-aside--enabled kt-aside--left kt-aside--fixed kt-aside--offcanvas-default kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">

                <!--begin::Item-->
                <div class="kt-grid__item  kt-grid--hor">

                    <!--begin::Heade-->
                    <div class="kt-login-v2__head">
                        <div class="kt-login-v2__logo">
                            <a href="#">
                                <img src="{{ asset('assets/media/logos/samafreight-logo.png') }}" alt="" width="170px" height="80px">
                            </a>
                        </div>
                        <div class="kt-login-v2__signup">
                            <!-- <span>Don't have an account?</span>
                            <a href="#" class="kt-link kt-font-brand">Sign Up</a> -->
                        </div>
                    </div>

                    <!--begin::Head-->
                </div>

                <!--end::Item-->

                <!--begin::Item-->
                <div class="kt-grid__item  kt-grid  kt-grid--ver  kt-grid__item--fluid">

                    <!--begin::Body-->
                    <div class="kt-login-v2__body">

                        <!--begin::Wrapper-->
                        <div class="kt-login-v2__wrapper">
                            <div class="kt-login-v2__container" style="box-shadow: 0px 15px 40px rgb(77 84 124 / 25%);">
                                <div class="kt-login-v2__title">
                                    <h3>Ingresa a tu cuenta</h3>
                                </div>

                                <!--begin::Form-->
                                <form class="kt-login-v2__form kt-form" action="{{ route('login') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <!-- <input class="form-control" type="text" placeholder="Username" name="username" autocomplete="off"> -->
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <!-- <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off"> -->

                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <!--begin::Action-->
                                    <div class="form-group">

                                        <div class="kt-login-v2__actions">
                                            {{-- <a href="#" class="kt-link kt-link--brand">
                                                Olvidaste tu contraseña ?
                                            </a> --}}
                                            <button type="submit" class="btn btn-brand btn-elevate btn-pill" style="width: 100%;">Ingresar</button>
                                        </div>
                                    </div>

                                    <!--end::Action-->
                                </form>

                                <!--end::Form-->

                                <!--begin::Separator-->
                                <div class="kt-separator kt-separator--space-lg  kt-separator--border-solid"></div>

                                <!--end::Separator-->

                                <!--begin::Options-->
                                <!-- <h3 class="kt-login-v2__desc">Or sign with social account</h3>
                                <div class="kt-login-v2__options">
                                    <a href="#" class="btn btn-facebook btn-pill">
                                        <i class="fab fa-facebook-f"></i>
                                        Facebook
                                    </a>
                                    <a href="#" class="btn btn-twitter btn-pill">
                                        <i class="fab fa-twitter"></i>
                                        Twitter
                                    </a>
                                    <a href="#" class="btn btn-google btn-pill">
                                        <i class="fab fa-google"></i>
                                        Google
                                    </a>
                                </div> -->

                                <!--end::Options-->
                            </div>
                        </div>

                        <!--end::Wrapper-->

                        <!--begin::Image-->
                        <!-- <div class="kt-login-v2__image">
                            <img src="assets/media/misc/bg_icon.svg" alt="">
                        </div> -->

                        <!--begin::Image-->
                    </div>

                    <!--begin::Body-->
                </div>

                <!--end::Item-->

                <!--begin::Item-->
                <!-- <div class="kt-grid__item">
                    <div class="kt-login-v2__footer">
                        <div class="kt-login-v2__link">
                            <a href="#" class="kt-link kt-font-brand">Privacy</a>
                            <a href="#" class="kt-link kt-font-brand">Legal</a>
                            <a href="#" class="kt-link kt-font-brand">Contact</a>
                        </div>
                        <div class="kt-login-v2__info">
                            <a href="#" class="kt-link">&copy; 2018 KeenThemes</a>
                        </div>
                    </div>
                </div> -->

                <!--end::Item-->
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#1cac81",
                        "metal": "#c4c5d6",
                        "light": "#ffffff",
                        "accent": "#00c5dc",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995",
                        "focus": "#9816f4"
                    },
                    "base": {
                        "label": [
                            "#b9bdc1",
                            "#aeb2b7",
                            "#414b4c",
                            "#343d3e"
                        ],
                        "shape": [
                            "#eef4f3",
                            "#e0e9e6",
                            "#80c3af",
                            "#41675c"
                        ]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="assets/js/pages/custom/user/login.js" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>
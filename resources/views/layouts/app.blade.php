<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() == 'ar')dir="rtl"@else dir="ltr"@endif>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link
        rel="shortcut icon"
        href="/assets/img/favicon.ico"
        type="image/x-icon"
    />
    <!--== Main Style CSS ==-->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/style-ar.css" rel="stylesheet" />

    @stack('css')
</head>


<body dir="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() == 'ar')dir="rtl"@else dir="ltr"@endif>

<div class="wrapper home-default-wrapper">
    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @include("layouts.header")


@yield('content')

@include('layouts.footer')


    <div class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

    <div class="whatsapp-icon">
        <a href="https://api.whatsapp.com/send?phone=01017122395">
            <img src="assets/img/whatsapp.png" class="img-fluid" width="65px"
            /></a>
    </div>
</div>

<!-- all js -->

<!--=== Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="/assets/js/jquery-3.6.0.min.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="/assets/js/jquery-migrate-3.3.2.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<!--=== jquery UI Min Js ===-->
<script src="/assets/js/jquery-ui.min.js"></script>
<!--=== Plugin Collection Js ===-->
<script src="/assets/js/plugincollection.js"></script>
<!--=== Custom Js ===-->
<script src="/assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "30000",
        "timeOut": "5000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error("{{$error}}");
    @endforeach
    @endif
    @if(session()->get("success"))

    toastr.success("{{session('success')}}");
    @endif
    @if(session('error'))
    toastr.error("{{session('error')}}");
    @endif
</script>

@stack('js')

</body>
</html>

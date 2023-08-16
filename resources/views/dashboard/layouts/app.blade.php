<!DOCTYPE html>
<html lang="en" style="direction: rtl;">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" href="{{ asset('assets/style/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6337366667.js"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

</head>
<body>

<div class="main">
    <!-- side bare -->
    @include('dashboard.layouts.sidebare')
    <!-- dashboard  -->
    <div class="dashboard">

        <!-- nav  -->
        @include('dashboard.layouts.header')
        <!-- content  -->
        @yield('content')
        <!-- footer  -->
        @include('dashboard.layouts.footer')

    </div>
</div>

</body>
@yield('script')
<script>
    $('.sidebare_icon').click(function(){
        $('.sidebare').toggle();
    });
    $('.dropdown').click(function(){
        $('.user_logo .more').toggle();
    });

    window.addEventListener('resize', ()=>{
        if (window.innerWidth <= 768 && window.innerWidth >= 760) {
            $('.sidebare').hide();
        }
    });


    document.querySelector('.sidebare',':after').addEventListener('click', function () {
        $('.sidebare').toggle();
    });
</script>
</html>

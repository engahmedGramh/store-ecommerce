<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="مؤسسة رقميات التحول لتقنية المعلومات, التحول الرقمي , تطوير تطبيقات الأعمال, منصات الأعمال, حلول التجارة الإلكترونية, التطبيقات المخصصة, تطبيقات الجوال, رواد التحول الرقمي
" />
    <meta name="description" content="مؤسسة رقميات التحول لتقنية المعلومات" />
    <meta name="author" content="www.ragmyat.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> مؤسسة رقميات التحول لتقنية المعلومات </title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{URL::asset('plugins/images/favicon.png')}}" />

    
    @include('includes.libstyle')
</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <div class="loader-text"> مؤسسة رقميات </div>
                <div class="loader-dots"> <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <!-- preloader end -->

       @include('includes.menue')
       @yield('content')
       @include('includes.footer')
       



    </div>

    <!-- page wrapper end -->


    <!--back-to-top start-->

    <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-upload"></i></a></div>

    <!--back-to-top end-->
    @include('includes.script')

</body>

</html>

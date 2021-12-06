@extends('layouts.master')
@section('content')
<!--hero section start-->

<div id="particles-js" style="z-index: 0;">

    <section id="hero" class="d-flex justify-cntent-center align-items-center">



        <div style="" id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel"
            data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <img alt="" style="height:15vh;position: center; margin-bottom: 3%"
                        src="{{URL::asset('plugins/assets/img/logo.png')}}" class="animate__animated animate__fadeInDown logo1"></img>

                    <h2 class="animate__animated animate__fadeInDown">مؤسسة رقميات التحول لتقنية
                        المعلومات</span>
                    </h2>
                    <a href="index.html" class="btn-get-started animate__animated animate__fadeInUp">ملف
                        العمل</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <img alt="" style="height:15vh;position: center; margin-bottom: 3%"
                        src="{{URL::asset('plugins/assets/img/logo.png')}}" class="animate__animated  logo1"></img>

                    <h2 class="animate__animated animate__fadeInDown">استشارة التحول الرقمي وتطوير
                        البرمجيات</span>
                    </h2>
                    <a href="index.html" class="btn-get-started animate__animated ">ملف العمل</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <img alt="" style="height:15vh;position: center; margin-bottom: 3%"
                        src="{{URL::asset('plugins/assets/img/logo.png')}}" class="animate__animated  logo1"></img>

                    <h2 class="animate__animated animate__fadeInDown">تصميم وتطوير الحلول الرقمية</span>
                    </h2>
                    <a href="index.html" class="btn-get-started animate__animated ">ملف العمل</a>
                </div>
            </div>
            <a style="color: #61a6ff" class="carousel-control-prev" href="#heroCarousel" role="button"
                data-bs-slide="prev">
                <img class="carousel-control-prev-icon bx bx-chevron-left" src="{{URL::asset('plugins/assets/img/next-l.png')}}" />
            </a>

            <a style="color: #61a6ff" class="carousel-control-next" href="#heroCarousel" role="button"
                data-bs-slide="next">
                <img class="carousel-control-next-icon bx bx-chevron-right" src="{{URL::asset('plugins/assets/img/next-r.png')}}" />
            </a>
        </div>
    </section>
</div>

<!-- ======= Hero Section ======= -->
     <!--body content start-->

     <div class="page-content">

        <!--feature start-->
        <section data-bg-img="{{URL::asset('plugins/images/pattern/02.png')}}">
            <div class="" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="white-bg box-shadow px-5 py-5 sm-px-3 sm-py-3 xs-px-2 xs-py-2 bg-contain bg-pos-l radius"
                                data-bg-img="{{URL::asset('plugins/images/bg/01.png')}}"
                                style="background-image: url(&quot;images/bg/01.png&quot;);">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 text-center mx-auto">
                                        <div class="section-title">
                                            <h6>رواد التحول الرقمي

                                            </h6>
                                            <h2 class="mb-4 animated fadeInUp duration-2">مؤسسة <span
                                                    class="font-w-5" style=" color: #495eaa;">
                                                    رقميات التحول
                                                </span>لتقنية المعلومات </h2>

                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">

                                    <div class="col-lg-6 col-md-6 mt-5 mt-lg-0">

                                        <p class="animated fadeInUp delay-1 duration-2">كيان متخصص في حلول
                                            التطبيقات
                                            والتحول الرقمي تعزز مجموعة خدماتنا وحلولنا المسار الأسرع لتحقيق
                                            إستراتيجية التطوير والنمو لأعمال عملائنا.
                                            <br> نحن نطبق حلول تقنية المعلومات ومناهج التحول الرقمي على النشاط
                                            التجاري وجعلهما تجربة شاملة كاملة في صورة رقمية تركز على العملاء
                                            والعاملين والشركاء حيث نثري العمليات والقدرات والموارد بالتقنيات
                                            وتأثيرها
                                            بطريقة إستراتيجية مع الاعتبار للاتجاهات الحالية والمستقبلية ذات العلاقة
                                            بالنشاط.

                                        </p>
                                        <div class="animated fadeInUp delay-2 duration-2 mr-auto text-revers">
                                            <a class="btn btn-theme" href="aboutus.php"><span> اقراء
                                                    المزيد</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 text-center">
                                        <img class="img-fluid animated zoomIn delay-2 duration-2"
                                            src="{{URL::asset('plugins/images/banner/03.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- serveses -->
        <section data-bg-img="{{URL::asset('plugins/images/pattern/02.png')}}" class="white-bg position-relative text-center">
            <div class="pattern-3">
                <img class="img-fluid rotateme" src="{{URL::asset('plugins/images/pattern/03.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 mx-auto">
                        <div class="section-title">
                            <h6>الخدمات والحلول </h6>
                            <h2 class="title">نحن نقدم افضل الخدمات والحلول الالكترونية</h2>
                            <p> تقدم رقميات مجموعة متكاملة من الخدمات في مجالات التحول الرقمي وتطوير البرمجيات يضم
                                فريقنا نخبة متميزة من المهنيين ذوي الخبرة الطويلة في التقنيات الحديثة تركز على تقديم
                                حلول فعالة من حيث التكلفة مثل تطوير منصات وتطبيقات
                                الأعمال، حلول ومنصات التجارة الإلكترونية والمنصات المتخصصة وتطبيقات الجوال والأجهزة
                                المحمولة. </p>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto services">
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item style-3">
                            <div class="featured-icon">
                                <div class="hexagon mx-auto text-center"><span>
                                        <img class="img-fluid" src="{{URL::asset('plugins/images/feature/1.png')}}" alt=""> </span>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h5> <a href="service1.php"> التحول الرقمي </a> </h5>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    الانتقال بمنهجية الأعمل بتطبيق اّليات إبداعية جديدة.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item style-3 serv2">
                            <div class="featured-icon">
                                <div class="hexagon mx-auto text-center"><span>
                                        <img class="img-fluid" src="{{URL::asset('plugins/images/feature/2.png')}}" alt=""> </span>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h5> <a href="service2.php"> تطوير تطبيقات الأعمال </a></h5>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    تطبيقات الأعمال الخااصة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4">
                        <div class="featured-item style-3 serv3">
                            <div class="featured-icon">
                                <div class="hexagon mx-auto text-center"><span>
                                        <img class="img-fluid" src="{{URL::asset('plugins/images/feature/5.png')}}" alt=""> </span>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h5><a href="service3.php"> منصات الأعمال </a></h5>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    منصات الأعمال التوافقية
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2">

                    </div>
                    <div class="col-lg-5 col-md-4">
                        <div class="featured-item style-3 serv4">
                            <div class="featured-icon">
                                <div class="hexagon mx-auto text-center"><span>
                                        <img class="img-fluid" src="{{URL::asset('plugins/images/feature/3.png')}}" alt=""> </span>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h5><a href="service4.php"> حلول التجارة الإلكترونية </a></h5>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    منصات التجارة الالكترونية الحديثة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item style-3 serv5">
                            <div class="featured-icon">
                                <div class="hexagon mx-auto text-center"><span>
                                        <img class="img-fluid" src="{{URL::asset('plugins/images/feature/6.png')}}" alt=""> </span>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h5> <a href="service5.php"> التطبيقات المخصصة </a></h5>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    تطبيقات مخصصة الاستخدام (رقيب)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item style-3 serv6">
                            <div class="featured-icon">
                                <div class="hexagon mx-auto text-center"><span>
                                        <img class="img-fluid" src="{{URL::asset('plugins/images/feature/4.png')}}" alt=""> </span>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h5> <a href="service6.php"> تطبيقات الجوال </a></h5>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    تنفيذ حلول وتطبيقات الجوال
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--feature end-->
        <!-- what success animatedBackground -->
        <section class="overflow-hidden dark-bg custom-pb-18 " data-bg-img="{{URL::asset('plugins/images/ranger5.png')}}">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title mb-0">
                            <h6> رواد التحول الرقمي </h6>
                            <h2 class="title"> مؤسسة رقميات التحول لتقنية المعلومات </h2>

                        </div>
                    </div>
                </div>
                <div class="row mx-auto text-center services">
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/1.png')}}">
                            </div>

                            <h4>سنوات من الخبرة</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/2.png')}}">
                            </div>

                            <h4> دعم فني </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/3.png')}}">
                            </div>

                            <h4> دقة المواعيد </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/4.png')}}">
                            </div>

                            <h4> مصممين مبدعين </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/5.png')}}">
                            </div>

                            <h4> حلول رقمية كاملة </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/6.png')}}">
                            </div>

                            <h4> تصاميم حديثة </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/7.png')}}">
                            </div>

                            <h4> استضافة ممتازة </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 align-items-stretch aos-init aos-animate mx-auto"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon "> <img class="icon_plue" src="{{URL::asset('plugins/images/icon_plue/8.png')}}">
                            </div>

                            <h4> أخصائين مراقبة الجودة </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <!--project start-->

        <section class="overflow-hidden py-5">
            <div class="container-fluid p-0">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-12 mx-auto">
                        <div class="section-title">
                            <h6>جديد رقميات التحول</h6>
                            <h2 class="title">اخر المشاريع والاعمال المنفذة من قبل رقميات</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel popup-gallery" data-items="4" data-lg-items="3" data-md-items="2"
                            data-sm-items="1" data-autoplay="true">
                            <div class="item">
                                <div class="portfolio-item">
                                    <img class="img-fluid w-100" src="{{URL::asset('plugins/images/project/01.jpg')}}" alt="">
                                    <div class="portfolio-title"> <span> الاسم التجاري </span>
                                        <h4> غيَّر (لتتغير) </h4>
                                    </div>
                                    <a class="popup-img" href="{{URL::asset('plugins/images/project/large/02.jpg')}}"> <i
                                            class="flaticon-plus"></i>
                                    </a> <a class="popup-link" href="ghier-details.php">اعرف أكثر </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="portfolio-item">
                                    <img class="img-fluid w-100" src="{{URL::asset('plugins/images/project/02.jpg')}}" alt="">
                                    <div class="portfolio-title"> <span> الاسم التجاري </span>
                                        <h4> اوتو بارت لقطع غيار السيارات </h4>
                                    </div>
                                    <a class="popup-img" href="{{URL::asset('plugins/images/project/large/02.jpg')}}"> <i
                                            class="flaticon-plus"></i>
                                    </a> <a class="popup-link" href="#">اعرف أكثر </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="portfolio-item">
                                    <img class="img-fluid w-100" src="{{URL::asset('plugins/images/project/03.jpg')}}" alt="">
                                    <div class="portfolio-title"> <span> الاسم التجاري </span>
                                        <h4> منصة هوم تن كي للعقارات </h4>
                                    </div>
                                    <a class="popup-img" href="{{URL::asset('plugins/images/project/large/03.jpg')}}"> <i
                                            class="flaticon-plus"></i>
                                    </a> <a class="popup-link" href="#">اعرف أكثر </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="portfolio-item">
                                    <img class="img-fluid w-100" src="{{URL::asset('plugins/images/project/04.jpg')}}" alt="">
                                    <div class="portfolio-title"> <span> الاسم التجاري </span>
                                        <h4> المجلس الصحي السعودي </h4>
                                    </div>
                                    <a class="popup-img" href="{{URL::asset('plugins/images/project/large/04.jpg')}}"> <i
                                            class="flaticon-plus"></i>
                                    </a> <a class="popup-link" href="#">اعرف أكثر </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="portfolio-item">
                                    <img class="img-fluid w-100" src="{{URL::asset('plugins/images/project/05.jpg')}}" alt="">
                                    <div class="portfolio-title"> <span> الاسم التجاري </span>
                                        <h4> مؤسسة رقميات رواد التحول الرقمي </h4>
                                    </div>
                                    <a class="popup-img" href="{{URL::asset('plugins/images/project/large/05.jpg')}}"> <i
                                            class="flaticon-plus"></i>
                                    </a> <a class="popup-link" href="#">اعرف أكثر </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="portfolio-item">
                                    <img class="img-fluid w-100" src="{{URL::asset('plugins/images/project/06.jpg')}}" alt="">
                                    <div class="portfolio-title"> <span> الاسم التجاري </span>
                                        <h4> نظام رقيب </h4>
                                    </div>
                                    <a class="popup-img" href="{{URL::asset('plugins/images/project/large/06.jpg')}}"> <i
                                            class="flaticon-plus"></i>
                                    </a> <a class="popup-link" href="http://ragmyat.com/raqeeb.php">اعرف أكثر
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--project end-->
        <!-- what success animatedBackground -->
        <section class="overflow-hidden dark-bg custom-pb-18 " data-bg-img="{{URL::asset('plugins/images/ranger5.png')}}">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title mb-0">
                            <h6> قصة نجاحنا </h6>
                            <h2 class="title">ماذا يعني لنا النجاح؟ </h2>
                            <p class="mb-0 text-white">محور اهتمامنا دوما يعمل على التحديات المحيطة بنشاطك التجاري
                                بالتحليل المكثف لنتمكن بشكل فريد من الوصول لحلول أبداعية معززة بالتطبيق الأمثل
                                للتقنية يلمس ذلك العميل في التأثير المباشر على تجربة عملائه وشركاه وفريق عمله ذلك
                                بإيجاز النجاح في قاموسنا. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--client logo start-->

        <section class="ourClints grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="owl-carousel no-pb" data-items="5" data-md-items="4" data-sm-items="3"
                            data-dots="false" data-autoplay="true">
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/07.png')}}" alt="">
                            </div>
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/08.png')}}" alt="">
                            </div>
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/09.png')}}" alt="">
                            </div>
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/10.png')}}" alt="">
                            </div>
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/11.png')}}" alt="">
                            </div>
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/12.png')}}" alt="">
                            </div>
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/11.png')}}" alt="">
                            </div>
                            <div class="item mx-auto">
                                <img class="img-fluid" src="{{URL::asset('plugins/images/client/13.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="go aos-init aos-animate" data-aos="fade-up" date-aos-delay="200" style="background: none;">

            <h1 style="color: #0d2735; text-align:center;">أتريد البدء؟</h1>
            <p>هل لديك فكره؟ هل تريد لهذه الفكره أن تظهر للعالم؟ إذا, ماذا تنتظر؟</p>

            <div class="container" style="margin-top: 5em;  background: none;">

                <div class="row ">



                    <div class="col-lg-12 d-flex flex-column justify-content-center p-5">


                        <!-- partial:index.partial.html -->
                        <div class="content-moving">
                            <div class="moving-zone">
                                <div class="popup"
                                    style="left: -4.60171px; top: -7.9007px; transform: rotateX(-5.26713deg) rotateY(3.06781deg);">
                                    <div class="popup-content">
                                        <div class="popup-text">
                                            <h2>ابداء الان</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->
                    </div>


                </div>



            </div>



        </section>
        <!--client logo end-->



    </div>

    <!--body content end-->
@endsection

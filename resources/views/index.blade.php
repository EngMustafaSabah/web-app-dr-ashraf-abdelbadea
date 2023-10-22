
@extends('layouts.app')
@section('content')


    <!--== End Header Wrapper ==-->

    <main class="main-content site-wrapper-reveal">
        <!--== Start Hero Area Wrapper ==-->
        <section class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <div
                        class="swiper-slide"
                        data-bg-img="assets/img/slider/slide1.jpg"
                    >
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h2 class="title animated delay1">          دكتور أشرف عبد البديع استشاري جراحة السمنة والمناظير </h2>
                                        <p class="text animated delay2">
                          <span class="d-block">                          خبرة أكثر من 15 عاما في مجال جراحات السمنة
                          </span>
                                        </p>
                                        <a href="about.html" class="btn btn-danger me-3 animated delay1"
                                        >المزيد</a
                                        >
                                        <!-- <a
                                          href="#"
                                          class="btn btn-outline-secondary animated delay2"
                                          >خدماتنا</a
                                        > -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end -->
                    <!-- swiper-slide start -->
                    <div
                        class="swiper-slide"
                        data-bg-img="assets/img/slider/slide2.jpg"
                    >
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h2 class="title animated delay1">عمليات السمنة المفرطة</h2>
                                        <p class="text animated delay2">
                                            تكميم المعدة - تحويل المسار الكلاسيكي -تحويل المسار المصغر- عمليات التصحيح -</p>
                                        <a href="about.html" class="btn btn-danger me-3 animated delay1"
                                        >المزيد</a>
                                        {{--                                        <a--}}
                                        {{--                                            href="#"--}}
                                        {{--                                            class="btn btn-outline-secondary animated delay2"--}}
                                        {{--                                        >خدماتنا</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end -->
                </div>

                <div class="swiper-button-prev">
                    <i class="icofont-arrow-right"></i>
                </div>
                <div class="swiper-button-next">
                    <i class="icofont-arrow-left"></i>
                </div>
            </div>
        </section>

        <section class="feature-section address">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="section-title"
                            data-aos="fade-up"
                            data-aos-duration="1100"
                        >
                            <h2 class="title"><span>العنوان : </span>                       عيادة الدقي : 19 شارع وزارة الزراعة فوق بنك القاهره
                            </h2>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="service-area" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title">من نحن</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row service-style2">
                            <div class="col-12 service-item">
                                <div class="content">
                                    <h5 class="service-name">عن دكتور أشرف عبد البديع</h5>
                                    <p>
                                        دكتور أشرف عبدالبديع بخبرة عريقة في مجال جراحات الجهاز
                                        الهضمي ومعالجة السمنة يهتم بصحة مرضاه بشكل متقدم ومتميز.
                                        لديه أكثر من 15 عامًا من الخبرة العملية في هذا المجال،
                                        وهو عضو فخري في الجمعية المصرية لجراحات البطن، مما يعكس
                                        تفانيه واهتمامه بالبقاء على اطلاع دائم بأحدث التطورات
                                        والتقنيات الطبية. يُعد تخصصه في إجراء عمليات تكميم
                                        المعدة بأنواعها المختلفة
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="about.html" class="btn btn-danger mt-4">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="section-title"
                            data-aos="fade-up"
                            data-aos-duration="1100"
                        >
                            <p>لماذا تختار الطبية</p>
                            <h2 class="title"><span>الافضل </span> لحياتك</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div
                            class="swiper-container service-slider-container"
                            data-aos="fade-up"
                            data-aos-duration="1100"
                        >
                            <div class="swiper-wrapper testimonial-slider">
                                <!--== Start Testimonial Item ==-->
                                <div class="swiper-slide service-item">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100"
                                    >
                                        <div class="client-content">
                                            <div class="icon-box-item">
                                                <div class="icon">
                                                    <i class="icofont-prescription"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">جراحات الجهاز الهضمي </h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consect adipisicing
                                                        elit vero. Donec ultri sollicitudin lacus
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide service-item">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100"
                                    >
                                        <div class="client-content">
                                            <div class="icon-box-item">
                                                <div class="icon">
                                                    <i class="icofont-doctor-alt"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">جراحات السمنه المفرطه</h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consect adipisicing elit
                                                        vero. Donec ultri sollicitudin lacus
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>

        <section
            class="testimonial-area testimonial-default-area bg-img"
            data-bg-img="assets/img/photos/testimonial-bg1.jpg"
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="section-title text-center"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                        >
                            <p>شهاده ثقه</p>
                            <h2 class="title"><span>ثقه </span> عملائنا</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div
                            class="swiper-container testimonial-slider-container"
                            data-aos="fade-up"
                            data-aos-duration="1100"
                        >
                            <div class="swiper-wrapper testimonial-slider">
                                <!--== Start Testimonial Item ==-->
                                <div class="swiper-slide testimonial-item">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100"
                                    >
                                        <div class="client-content">
                                            <p>
                                                والله انا من ضمن اللي عملت العمليه عند الدكتور اشرف
                                                و بشكرك جدا دعاء السجيني والله ونعم الاحترام یا
                                                دکتور اشرف
                                            </p>
                                        </div>
                                        <div class="client-info">
                                            <div class="desc">
                                                <h4 class="name">دعاء السجيني</h4>
                                                <!-- <p class="client-location">
                                              Golden Lotus Apartment, Brooklyn, USA
                                            </p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                                <!--== Start Testimonial Item ==-->
                                <div class="swiper-slide testimonial-item h-100">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100"
                                    >
                                        <div class="client-content">
                                            <p>
                                                اشطر دكتور وعن تجربة واحسن متابعة ربنا يكرمك و
                                                يباركلك يا رب
                                            </p>
                                        </div>
                                        <div class="client-info">
                                            <div class="desc">
                                                <h4 class="name">Sheren Abd Elhamid</h4>
                                                <!-- <p class="client-location">
                                              Golden Lotus Apartment, HasTech, BNA
                                            </p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide testimonial-item h-100">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100"
                                    >
                                        <div class="client-content">
                                            <p>
                                                تسلم ايدك يادكتور والله حضرتك من الدكاتره الممتازين
                                            </p>
                                        </div>
                                        <div class="client-info">
                                            <div class="desc">
                                                <h4 class="name">Hader Mahmoud</h4>
                                                <!-- <p class="client-location">
                                              Golden Lotus Apartment, HasTech, BNA
                                            </p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide testimonial-item h-100">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100"
                                    >
                                        <div class="client-content">
                                            <p>
                                                ماشاء الله على حضرتك ربنا يبارك في حضرتك العملية
                                                بفضل الله كانت ممتازة
                                            </p>
                                        </div>
                                        <div class="client-info">
                                            <div class="desc">
                                                <h4 class="name">يقيني بالله يقيني</h4>
                                                <!-- <p class="client-location">
                                              Golden Lotus Apartment, HasTech, BNA
                                            </p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide testimonial-item h-100">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center h-100"
                                    >
                                        <div class="client-content">
                                            <p>
                                                ربنا يبارك فيك يا دكتور لا أزكيك على الله علما وخلقا
                                                لا ازكيك علي الله يا دكتور من أفضل الأطباء خلقا
                                                ومهاره ربنا يبارك فيه انسان امين ومحب لمهنته
                                            </p>
                                        </div>
                                        <div class="client-info">
                                            <div class="desc">
                                                <h4 class="name">Dolly Nada</h4>
                                                <!-- <p class="client-location">
                                              Golden Lotus Apartment, HasTech, BNA
                                            </p> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!--== End Testimonial Item ==-->
                                </div>
                                <!-- Add Arrows -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>



@endsection

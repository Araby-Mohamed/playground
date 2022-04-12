<!DOCTYPE html>
<html lang="ar">

<!-- Mirrored from golatoapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 15:38:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>منصة قولاتو</title>
    <link rel="stylesheet" href="{{url('/')}}/new_front/css/libs/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{url('/')}}/new_front/css/libs/all.min.css"/>
    <link rel="stylesheet"
          href="{{url('/')}}/new_front/unpkg.com/flickity%402.3.0/dist/flickity.min.css"/>
    <link rel="stylesheet" href="{{url('/')}}/new_front/css/main.min.css"/>
    <link rel="stylesheet" href="{{url('/')}}/new_front/css/main-ar.min.css"/>

</head>
<body>
<div class="overflow-hidden">
    <div class="navbar-up">
        <div class="container">
            <nav>
                <a class="nav-logo" href="#">
                    <img src="{{settings()->website_logo()}}" alt=""/>
                </a>
                <div class="nav-parent">
                    <ul class="nav-menu list-unstyled text-capitalize align-items-lg-center">
                        <li class="nav-item order-1">
                            <a class="nav-link" href="#" data-scroll="#home">الرئيسية</a>
                        </li>
                        <li class="nav-item order-4">
                            <a class="nav-link" href="#" data-scroll="#about-us">عن قولاتو</a>
                        </li>
                        <li class="nav-item order-2">
                            <a class="nav-link" href="#" data-scroll="#playgrounds">ملاعب</a>
                        </li>
                        <li class="nav-item order-3">
                            <a class="nav-link" href="#" data-scroll="#academies">أكاديميات</a>
                        </li>
                        <li class="nav-item order-5">
                            <a class="nav-link" href="#" data-scroll="#contacts">تواصل معنا</a>
                        </li>
                        <li class="nav-item order-last">
                            <button type="button"
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#sign-in-form">
                                تسجيل حجز ملعب
                            </button>
                        </li>
                    </ul>
                    <div class="d-lg-none">
                        <div class="close"></div>
                    </div>
                </div>
                <div class="bars ms-4">
                    <span class="bar"></span><span class="bar"></span><span class="bar"></span>
                </div>
            </nav>
        </div>
    </div>


    <div class="header" id="home">
        <div class="container">
            @if(flash()->message)
                <div
                    style="position: absolute;z-index: 4444444444444;left: 35px;top: 80px;max-width: calc(100% - 70px);padding: 16px 22px;border-radius: 7px;overflow: hidden;width: 273px;border-right: 8px solid #374b52;background: #2196f3;color: #fff;cursor: pointer;"
                    onclick="$(this).slideUp();">
                    <span class="fas fa-info-circle"></span> {{ flash()->message }}
                </div>
            @endif
            @if ($errors->any())
                <div
                    style="position: absolute;z-index: 4444444444444;left: 35px;top: 80px;max-width: calc(100% - 70px);padding: 16px 22px;border-radius: 7px;overflow: hidden;width: 273px;border-right: 8px solid #374b52;background: #FF0000;color: #fff;cursor: pointer;"
                    onclick="$(this).slideUp();">
                    <span class="fas fa-info-circle"></span>
                    @foreach ($errors->all() as  $value)
                        {{ $value }} <br>
                    @endforeach
                </div>
            @endif
            <div class="row gx-0">
                <div class="col-lg-8">
                    <div class="info">
                        <h2>انضم لـ 6.5 مليون رياضي يلعبون ويتعلمون في قولاتو</h2>
                        <p>
                            قولاتو منصة الرياضيين، تتيح لك حجز الملاعب، الإشتراك في الأكاديميات، الإنضمام للتمارين.
                            <br/>
                            سواءً كنت منسق فريقك لحجز الملاعب، أو كنت هاوي وتدور أحد تلعب معه، أو حتى تبغى تتدرب وتتعلم
                            أساسيات وفنون أي رياضة، حيّاك!
                            <br/>
                            قولاتو منصة متكاملة لعشاق الرياضة تستعرض منها الملاعب في مدينتك، وممكن تستعرض على الخريطة،
                            وتختار الأقرب لك والأنسب موقع، وتقدر تستعرض الملعب وتشوف خدماته ومميزاته، وتشوف صوره وتحجزه
                            بكل موثوقية وضمان وبضغطة زر بس!
                        </p>
                        <a href="get.html"> <img src="{{url('/')}}/new_front/img/Badge-gp.svg" alt=""/></a><a
                            href="get.html"> <img src="{{url('/')}}/new_front/img/Badge-as.svg" alt=""/></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-none d-lg-block">
                    <img src="{{url('/')}}/new_front/img/header-iPhone.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us" id="about-us">
        <div class="container">
            <div class="row align-items-center gx-0 justify-content-center">
                <div class="col-lg order-lg-first order-last">
                    <div class="videos">
                        <video id="video" poster="{{url('/')}}/new_front/img/Mask%20Group.png">
                            <source src="{{url('/')}}/new_front/img/1.mp4" type="video/mp4"/>
                            your browser don't support video
                        </video>
                        <div class="play-gif" id="circle-play-b" title="Play video">
                            <svg width="58"
                                 height="58"
                                 viewBox="0 0 58 58"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29 0C13.05 0 0 13.05 0 29C0 44.95 13.05 58 29 58C44.95 58 58 44.95 58 29C58 13.05 44.95 0 29 0ZM25.6 40.25C24.6111 40.9916 23.2 40.2861 23.2 39.05V18.95C23.2 17.7139 24.6111 17.0084 25.6 17.75L39 27.8C39.8 28.4 39.8 29.6 39 30.2L25.6 40.25Z"
                                    fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text">
                        <h2>عن قولاتو والخدمات</h2>
                        <p>
                            قولاتو يقدم لملاك الملاعب والأكاديميات العديد من الخدمات المميزة،

                            مثل تسويقهم لمئات الآلاف من اللاعبين، وتسهيل كافة الأعمال التشغيلية والإدارية لهم.

                            كما يساهم قولاتو في تحسين تجربة العملاء وتوفير الخيارات المناسبة لهم بكل سهولة.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="services">
        <div class="services">
            <div class="bg-color"></div>
            <div class="row align-items-lg-center gx-0 justify-content-center">
                <div class="col-xl-5 col-md-6">
                    <h2>
                        ليه تحجز ملعبك من قولاتو؟
                    </h2>
                    <p>
                        قولاتو فيه أكثر من 400 ملعب تقدر تختار بينها، فيه الإنجيلة، والترابي، والطبيعي ، والصالات ،
                        وتخيل عندنا ملاعب فيها مكيفات !
                        <br/>
                        الحجز مرن جداً ولو حصل لك أي ظرف أو حتى غيرت رأيك، بسهولة تعدل على حجزك.
                        <br/>
                        الدفع يكون في الملعب، أو بشكل إلكتروني.
                        أفضل العروض والأسعار، بتحصلها معنا أكيييد.
                    </p>
                </div>
                <div class="col-md">
                    <div class="row g-0 our-services">
                        <div class="col">
                            <div class="service">
                                <div class="icon"><img src="{{url('/')}}/new_front/img/ball.svg" alt=""/></div>
                                <div class="text">
                                    <h3>رياضات مختلفة</h3>
                                    <p>إحجز ملعبك المفضل في أكثر من 6 رياضات مختلفة</p>
                                </div>
                            </div>
                            <div class="service">
                                <div class="icon"><img src="{{url('/')}}/new_front/img/stad.svg" alt=""/></div>
                                <div class="text">
                                    <h3>نظم مبارياتك بسهولة</h3>
                                    <p>حدد الوقت والمكان، وبكل سهولة كمل تنظيم مبارياتك</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service">
                                <div class="icon"><img src="{{url('/')}}/new_front/img/goal.svg" alt=""/></div>
                                <div class="text">
                                    <h3>إلعب مع الآخرين</h3>
                                    <p>ما عندك فريق؟ تقدر تنضم لمباريات وتكملهم</p>
                                </div>
                            </div>
                            <div class="service">
                                <div class="icon">
                                    <img src="{{url('/')}}/new_front/img/missed-chances.svg" alt=""/>
                                </div>
                                <div class="text">
                                    <h3>إبني ملفك الشخصي</h3>
                                    <p>أكيد انك لاعب مميز، قولاتو يساعدك تبهر الناس</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="playgrounds" id="playgrounds">
        <div class="container">
            <h4>وين ما كنت</h4>
            <h2>ملاعب في كل مكان</h2>
        </div>
        <div class="container carousle-overflow">
            <div class="playgrounds-carousel">
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/playgrounds1.png" alt=""/></div>
                    <h3>الخبر<span class="ground-width">كرة قدم</span></h3>
                    <p>ملعب القبة</p>
                </div>
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/playgrounds2.png" alt=""/></div>
                    <h3>الرياض<span class="ground-width">كرة قدم</span></h3>
                    <p>ملاعب ڤيا</p>
                </div>
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/playgrounds3.png" alt=""/></div>
                    <h3>الرياض<span class="ground-width">سلة</span></h3>
                    <p>ملاعب التربية النموذجية</p>
                </div>
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/playgrounds4.png" alt=""/></div>
                    <h3>الرياض<span class="ground-width">بادل</span></h3>
                    <p>ملاعب الدهيمي</p>
                </div>
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/playgrounds5.png" alt=""/></div>
                    <h3>جدة<span class="ground-width">طائرة</span></h3>
                    <p>ملعب ترند</p>
                </div>
            </div>
        </div>
    </div>
    <div class="statistics" id="statistics">
        <div class="container">
            <h4>إحصائيات مميزة</h4>
            <h2>إحصائيات من قولاتو</h2>
            <div class="row g-4 our-statistics">
                <div class="col-lg-3 col-6">
                    <div class="statistic">
                        <div class="icon"><img src="{{url('/')}}/new_front/img/statis-stad.svg" alt=""/></div>
                        <div class="text">
                            <h3>500</h3>
                            <p>ملعب</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="statistic">
                        <div class="icon">
                            <img src="{{url('/')}}/new_front/img/statis-player.svg" alt=""/>
                        </div>
                        <div class="text">
                            <h3>6.5 مليون</h3>
                            <p>لاعب</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="statistic">
                        <div class="icon">
                            <img src="{{url('/')}}/new_front/img/statis-address.svg" alt=""/>
                        </div>
                        <div class="text">
                            <h3>12</h3>
                            <p>مدينة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="statistic">
                        <div class="icon">
                            <img src="{{url('/')}}/new_front/img/statis-academy.svg" alt=""/>
                        </div>
                        <div class="text">
                            <h3>160</h3>
                            <p>أكاديمية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="academies" id="academies">
        <div class="container">
            <h4>تبي تدرب؟</h4>
            <h2>اكاديميات</h2>
        </div>
        <div class="container carousel-container carousle-overflow">
            <div class="academies-carousel">
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/academie1.png" alt=""/></div>
                    <h3>أكاديمية فارس</h3>
                    <p>من سن ٨ إلى سن ٢١</p>
                </div>
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/academie2.png" alt=""/></div>
                    <h3>اكاديمية نادي الهلال</h3>
                    <p>من سن ٨ إلى سن ١٨</p>
                </div>
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/academie3.png" alt=""/></div>
                    <h3>أكاديمية نادي الشباب</h3>
                    <p>من سن ٦ إلى سن ٢٠</p>
                </div>
                <div class="carousel-cell">
                    <div class="image"><img src="{{url('/')}}/new_front/img/academie4.png" alt=""/></div>
                    <h3>أكاديمية O15</h3>
                    <p>من سن ٦ إلى سن ٢٢</p>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="our-clients">
        <div class="container">
            <h4>ماذا يقول عنا عملائنا</h4>
            <h2>رأي عملائنا</h2>
            <div class="carousel-container row g-0">
                <div class="images col-lg-4 order-last">
                    <div class="image"
                         style="background-image: url('img/a 1.png')"></div>
                    <div class="image"
                         style="background-image: url('img/a 1.png')"></div>
                    <div class="image"
                         style="background-image: url('img/mohammed alsuwailem 1.png')"></div>
                    <div class="image"
                         style="background-image: url('img/mohammed alsuwailem 1.png')"></div>
                    <div class="image"
                         style="background-image: url('img/Salem_Al-Dawsari_2018 1.png')"></div>
                    <div class="image"
                         style="background-image: url('img/mohammed alsuwailem 1.png')"></div>
                    <div class="image"
                         style="background-image: url('img/Salem_Al-Dawsari_2018 1.png')"></div>
                    <div class="image"
                         style="background-image: url('img/Salem_Al-Dawsari_2018 1.png')"></div>
                </div>
                <div class="clients-carousel col-lg">
                    <div class="carousel-cell">
                        <div class="image">
                            <div class="carousel-image"
                                 style="
                  background-image: url('img/mohammed alsuwailem 1-big.png');
                "></div>
                        </div>
                        <div class="text">
                            <h3>عبدالله فهد العتيبي 1</h3>
                            <p>
                                ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو مثبتة
                                منذ زمن طويل وهي أن المحتوى المقروء لصفحة هناك حقيقة
                            </p>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="image">
                            <div class="carousel-image"
                                 style="
                  background-image: url('img/mohammed alsuwailem 1-big.png');
                "></div>
                        </div>
                        <div class="text">
                            <h3>عبدالله فهد العتيبي</h3>
                            <p>
                                ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو مثبتة
                                منذ زمن طويل وهي أن المحتوى المقروء لصفحة هناك حقيقة
                            </p>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="image">
                            <div class="carousel-image"
                                 style="
                  background-image: url('img/mohammed alsuwailem 1-big.png');
                "></div>
                        </div>
                        <div class="text">
                            <h3>عبدالله فهد العتيبي</h3>
                            <p>
                                ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو مثبتة
                                منذ زمن طويل وهي أن المحتوى المقروء لصفحة هناك حقيقة
                            </p>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="image">
                            <div class="carousel-image"
                                 style="
                  background-image: url('img/mohammed alsuwailem 1-big.png');
                "></div>
                        </div>
                        <div class="text">
                            <h3>عبدالله فهد العتيبي</h3>
                            <p>
                                ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو مثبتة
                                منذ زمن طويل وهي أن المحتوى المقروء لصفحة هناك حقيقة
                            </p>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="image">
                            <div class="carousel-image"
                                 style="
                  background-image: url('img/mohammed alsuwailem 1-big.png');
                "></div>
                        </div>
                        <div class="text">
                            <h3>عبدالله فهد العتيبي</h3>
                            <p>
                                ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو مثبتة
                                منذ زمن طويل وهي أن المحتوى المقروء لصفحة هناك حقيقة
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="container" id="contacts">
        <div class="acad-stad">
            <div class="bg-color"></div>
            <div class="row">
                <div class="col-lg-7">
                    <h2>عندك ملعب أو اكاديمية؟</h2>
                    <p>
                        قولاتو خيارك الأمثل والأسهل لإدارة مشروعك بشكل كامل، جرب قولاتو مجاناً!
                    </p>
                </div>
                <div class="col-lg align-self-center">
                    <ul>
                        <li class="stad"><a href="https://api.whatsapp.com/send/?phone=966502610049">سجل ملعبك</a></li>
                        <li class="acad"><a href="https://api.whatsapp.com/send/?phone=966502610049">سجل أكاديميتك </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us">
        <div class="container">
            <div class="row gy-lg-0 gy-5 px-5 px-sm-2">
                <div class="col-lg-3 col-sm-6">
                    <h2>العنوان</h2>
                    <ul class="list-unstyled">
                        <li>المملكة العربية السعودية - الرياض</li>
                        <li>
                            <bdi>+966563319949</bdi>
                        </li>
                        <li>
                            <bdi>info@GolatoApp.com</bdi>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h2>ساعات العمل</h2>
                    <ul class="list-unstyled">
                        <li>طوال الأسبوع</li>
                        <li>24 ساعة</li>
                    </ul>
                </div>
                <div class="col-lg-4 ms-lg-auto">
                    <h2>كن على تواصل</h2>
                    <p> تجدنا في وسائل التواصل الإجتماعي</p>
                    <ul class="social-media list-unstyled">
                        <li>
                            <a href="https://twitter.com/golatoapp"> <img src="{{url('/')}}/new_front/img/twitter.svg"
                                                                          alt=""/></a>
                        </li>
                    <!--<li>
                            <a href="#"> <img src="{{url('/')}}/new_front/img/facebook.svg" alt="" /></a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <ul class="col-md-3 col-6 col-lg-2 social-media list-unstyled">
                    <li>
                        <a href="https://twitter.com/golatoapp"> <i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/golatoapp"> <i class="fab fa-instagram"></i></a>
                    </li>
                    <!--<li>
                        <a href="#"> <i class="fab fa-facebook-f"></i></a>
                    </li>-->
                </ul>
                <div class="copyright col-lg-8 text-lg-center col-md">
                    جميع الحقوق محفوظة. منصة قولاتو
                    <bdi>Golato |</bdi>
                    . &copy; 2017
                    - 2022.
                    |
                    <a href="Terms.html">الشروط والاحكام </a>
                </div>
                <div class="languages col-lg-2 col-6 col-md-3">
                    <div class="btn-group dropup">
                        <!--<button class="btn dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            English<i class="fas fa-chevron-up"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">English </a></li>
                            <li><a href="#">Arabic </a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade"
     id="sign-in-form"
     tabindex="-1"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            <div class="sign-in">
                <i class="far fa-user"></i>
                <h3>تسجيل حجز ملعب</h3>
                <form method="POST" action="{{route('front.make_reservation')}}">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" placeholder="اسم الحجز" required
                               data-val="true" data-val-required="The PhoneNumber field is required." name="name"
                               value=""/>
                        <label for="phone" class="form-label require">اسم الحجز</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="phone" placeholder="رقم الجوال" required
                               data-val="true" data-val-required="The PhoneNumber field is required." name="phone"
                               value=""/>
                        <label for="phone" class="form-label require">رقم الجوال</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="amount" readonly placeholder="مبلغ الحجز" required
                               data-val="true" data-val-required="The PhoneNumber field is required." name="amount"
                               value="100"/>
                        <label for="phone" class="form-label require">مبلغ الحجز</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="deposit" placeholder="المدفوع" required
                               data-val="true" data-val-required="The PhoneNumber field is required." name="deposit"
                               value=""/>
                        <label for="phone" class="form-label require">المدفوع</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="remain" readonly placeholder="المتبقي" required
                               data-val="true" data-val-required="The PhoneNumber field is required." name="remain"
                               value="100"/>
                        <label for="phone" class="form-label require">المتبقي</label>
                    </div>
                    <div class="form-floating">
                        <input type="datetime-local" class="form-control datetime" id="start_time"
                               placeholder="وقت الحجز" required data-val="true"
                               data-val-required="The PhoneNumber field is required." name="start_time" value=""/>
                        <label for="phone" class="form-label require">وقت الحجز</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-control select2" required name="venue_id" id="venue">
                            @foreach($venues as $id => $venue)
                                <option
                                    value="{{ $id }}" {{ (isset($data) && $data->venue ? $data->venue->id : old('venue_id')) == $id ? 'selected' : '' }} >
                                    {{ $venue }}
                                </option>
                            @endforeach
                        </select>
                        <label for="phone" class="form-label require">الملعب</label>
                    </div>
                    <button type="submit">تقديم طلب الحجز</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{url('/')}}/new_front/js/libs/jquery-3.6.0.min.js"></script>
<script src="{{url('/')}}/new_front/js/libs/flickity.pkgd.min.js"></script>
<script src="{{url('/')}}/new_front/js/libs/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/new_front/js/main.min.js"></script>
<script src="{{url('/')}}/new_front/js/carousel-ar.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('keyup', '#amount', function () {
            //To View Updated remain value afer pay on view
            amount = document.getElementById("amount").value;
            deposit = document.getElementById("deposit").value;
            khasmtotla = amount - deposit;
            $("#remain").val(khasmtotla);
        });
        $(document).on('keyup', '#deposit', function () {
            //To View Updated remain value afer pay on view
            amount = document.getElementById("amount").value;
            deposit = document.getElementById("deposit").value;
            khasmtotla = amount - deposit;
            $("#remain").val(khasmtotla);
        });
    });
</script>
</body>
<!-- Mirrored from golatoapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 15:38:51 GMT -->
</html>

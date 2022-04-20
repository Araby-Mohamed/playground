@extends('layouts.front')
@section('content')
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
                    <div class="image">
                        <img src="{{url('/')}}/new_front/img/academie1.png" alt=""/>
                    </div>
                    <h3>أكاديمية فارس</h3>
                    <p>من سن ٨ إلى سن ٢١</p>
                </div>
                <div class="carousel-cell">
                    <div class="image">
                        <img src="{{url('/')}}/new_front/img/academie2.png" alt=""/></div>
                    <h3>اكاديمية نادي الهلال</h3>
                    <p>من سن ٨ إلى سن ١٨</p>
                </div>
                <div class="carousel-cell">
                    <div class="image">
                        <img src="{{url('/')}}/new_front/img/academie3.png" alt=""/></div>
                    <h3>أكاديمية نادي الشباب</h3>
                    <p>من سن ٦ إلى سن ٢٠</p>
                </div>
                <div class="carousel-cell">
                    <div class="image">
                        <img src="{{url('/')}}/new_front/img/academie4.png" alt=""/></div>
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
@endsection

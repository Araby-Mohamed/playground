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
                <a class="nav-logo" href="{{route('home')}}">
                    <img src="{{settings()->website_logo()}}" alt=""/>
                </a>
                <div class="nav-parent">
                    <ul class="nav-menu list-unstyled text-capitalize align-items-lg-center">
                        <li class="nav-item order-1">
                            <a class="nav-link" href="{{route('home')}}">الرئيسية</a>
                        </li>
                        <li class="nav-item order-4">
                            <a class="nav-link" href="{{url('about')}}">عن قولاتو</a>
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

                        @if(auth()->guard('customer')->check())
                            <li class="nav-item order-5">
                                <a class="nav-link" href="{{route('customer.my_reservations')}}">حجوزاتي</a>
                            </li>
                            <li class="nav-item order-5">
                                <a class="nav-link" href="{{route('customer.logout')}}">تسجيل الخروج</a>
                            </li>
                        @endif
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
@yield('content')
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
                    جميع الحقوق محفوظة.
                    <bdi>Devnile |</bdi>
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
            @if(auth()->guard('customer')->check())
                <div class="sign-in">
                    <i class="far fa-user"></i>
                    <h3>تسجيل حجز ملعب</h3>
                    <form method="POST" action="{{route('customer.make_reservation')}}">
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
                        {{--                    <div class="form-floating">--}}
                        {{--                        <select class="form-control select2" required name="venue_id" id="venue">--}}
                        {{--                            @foreach($venues as $id => $venue)--}}
                        {{--                                <option--}}
                        {{--                                    value="{{ $id }}" {{ (isset($data) && $data->venue ? $data->venue->id : old('venue_id')) == $id ? 'selected' : '' }} >--}}
                        {{--                                    {{ $venue }}--}}
                        {{--                                </option>--}}
                        {{--                            @endforeach--}}
                        {{--                        </select>--}}
                        {{--                        <label for="phone" class="form-label require">الملعب</label>--}}
                        {{--                    </div>--}}
                        @php $venues = \App\Models\Venue::all(); @endphp
                        <h3>اختر ملعب</h3>
                        <div class="form-floating row">
                            @foreach($venues as  $venue)
                                <div class="col-md-4">
                                    <img src="{{ $venue->image_path }}" style="
                                        width: 150px;
                                        height: 150px;
                                        padding-bottom: 5px;
                                        padding-top: 5px;
                                        padding-right: 5px;
                                        padding-left: 5px;">
                                    <label style="font-size: 15px;"> {{ $venue->name }}</label>
                                    <br>
                                    <input type="radio" checked name="venue_id" value="{{ $venue->id }}">
                                </div>
                            @endforeach
                        </div>
                        <button type="submit">تقديم طلب الحجز</button>
                    </form>
                </div>
            @else
                <div class="sign-in">
                    <i class="far fa-user"></i>
                    <h3>لحجز ملعب يرجى تسجيل الدخول اولا</h3>
                    <form  method="POST" action="{{route('customer.login')}}">
                        @csrf
                        <div class="validation-summary-valid text-danger" data-valmsg-summary="true"><ul><li style="display:none"></li>
                            </ul></div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="phone" placeholder="رقم الجوال" required data-val="true" data-val-required="The PhoneNumber field is required." name="phone" value="" />
                            <label for="phone" class="form-label require">رقم الجوال</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="password" type="password" placeholder="كلمة المرور" required data-val="true" data-val-required="The Password field is required." name="password" />
                            <label for="password" class="form-label require">كلمة المرور</label>
                        </div>
                        <button type="submit">تسجيل الدخول</button>

                        <div class="error"></div>
                    </form>
                    <script src="js/libs/validform.min.js"></script>
                    <a href="{{route('customer.register')}}">انشاء حساب جديد</a>
                </div>
            @endif
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
1

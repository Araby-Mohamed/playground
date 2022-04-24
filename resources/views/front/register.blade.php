@extends('layouts.front')
@section('content')
    <div class="header" id="home">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-8">
                    <div class="info">
                        <h2 style="text-align: center; color: green;">انشاء حساب جديد</h2>
                        <br>
                        <form method="POST" action="{{route('customer.register.store')}}">
                            @csrf
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="اسم المستخدم" required
                                       data-val="true" data-val-required="The PhoneNumber field is required."
                                       name="name" value="{{old('name')}}"
                                       maxlength="190"/>
                                <label for="phone" class="form-label require">اسم المستخدم</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="phone" placeholder="رقم الجوال" required
                                       data-val="true" data-val-required="The PhoneNumber field is required."
                                       name="phone" value="{{old('phone')}}"
                                       maxlength="190"/>
                                <label for="phone" class="form-label require">رقم الجوال</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="البريد الإلكتروني"
                                       required
                                       data-val="true" data-val-required="The PhoneNumber field is required."
                                       name="email" value="{{old('email')}}"
                                       maxlength="190"/>
                                <label for="phone" class="form-label require">البريد الإلكتروني</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="phone" placeholder="رقم المرور" required
                                       data-val="true" data-val-required="The PhoneNumber field is required."
                                       name="password"
                                       value=""/>
                                <label for="phone" class="form-label require">رقم المرور</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="phone" placeholder="تأكيد رقم المرور"
                                       required
                                       data-val="true" data-val-required="The PhoneNumber field is required."
                                       name="password_confirmation"
                                       value=""/>
                                <label for="phone" class="form-label require">تأكيد رقم المرور</label>
                            </div>
                            <br>
                            <div class="form-floating" style="text-align: center;">
                                <button type="submit" class="btn btn-success">انشاء الحساب</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-none d-lg-block">
                    <img src="{{url('/')}}/new_front/img/header-iPhone.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRegisterRequest;
use App\Http\Requests\ReservationRequest;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Venue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function register()
    {
        return view('front.register');
    }
    public function logout()
    {
        auth::guard('customer')->logout();
        flash()->success('تم تسجيل الخروج بنجاح', 'عملية ناجحة');
        return redirect()->route('home');
    }

    public function register_store(CustomerRegisterRequest $request)
    {
        $data = $request->validated();
        Customer::create($data);
        flash()->success('تم انشاء الحساب بنجاح', 'عملية ناجحة');
        return redirect()->route('home');
    }

    public function login(CustomerLoginRequest $request)
    {
        $data = $request->validated();
        if (auth::guard('customer')->attempt(['phone' => $data['phone'], 'password' => Request('password')], false)) {
            flash()->success('تم تسجيل الدخول', 'بيانات صحيحة');
            return redirect()->route('home');
        } else {
            flash()->error('الرقم السري أو اسم المستخدم خطأ ... !', 'بيانات غير صحيحة');
            return back();
        }
    }
}


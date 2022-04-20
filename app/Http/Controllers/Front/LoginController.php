<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRegisterRequest;
use App\Http\Requests\ReservationRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Venue;
use Carbon\Carbon;


class LoginController extends Controller
{
    public function register()
    {
        return view('front.register');
    }

    public function register_store(CustomerRegisterRequest $request)
    {
        $data = $request->validated();
        $data['start_time'] = Carbon::parse($data['start_time'])->translatedFormat("Y-m-d H:i:s");
        $data['booking_status'] = 'pending';
        Event::create($data);
        flash()->success('تم إضافة الحجز بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }
}


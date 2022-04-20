<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Event;
use App\Models\Venue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;


class ReservationController extends Controller
{
    public function make_reservation(ReservationRequest $request)
    {
        $data = $request->validated();
        $data['start_time'] = Carbon::parse($data['start_time'])->translatedFormat("Y-m-d H:i:s");
        $data['booking_status'] = 'pending';
        $data['customer_id'] = auth()->guard('customer')->user()->id;
        Event::create($data);
        flash()->success('تم إضافة الحجز بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }

    public function my_reservations()
    {
        $data = Event::where('customer_id', auth()->guard('customer')->user()->id)->get();
        return view('front.reservations', compact('data'));
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Venue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Contact;


class FrontController extends Controller
{
    public function index(Request $request)
    {
        $venues = Venue::all()->pluck('name', 'id')->prepend('اختر الملعب', '');
        return view('front.index',compact('venues'));
    }
    public function make_reservation(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => "required|max:191|unique:events,name",
            'phone' => "required|numeric",
            'amount' => "required|numeric",
            'deposit' => "required|numeric",
            'remain' => "required|numeric",
            'start_time' => "required|string",
            'venue_id' => "required|exists:venues,id",
        ]);
        $data['start_time'] = Carbon::parse($data['start_time'])->translatedFormat("Y-m-d H:i:s");
        $data['booking_status'] = 'pending';
        Event::create($data);
        flash()->success('تم إضافة الحجز بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }
    public function contact_post(Request $request)
    {
        $request->validate([
            'name'=>"required|min:3|max:190",
            'email'=>"nullable|email",
            "phone"=>"required|numeric",
            "message"=>"required|min:3|max:10000",
        ]);
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>"قادم من : ".urldecode(url()->previous())."\n\nالرسالة : ".$request->message
        ]);
        flash()->success('تم استلام رسالتك بنجاح وسنتواصل معك في أقرب وقت');
        //\Session::flash('message', __("Your Message Has Been Send Successfully And We Will Contact You Soon !"));
        return redirect()->back();
    }

    public function article(Request $request,Article $article)
    {
        return view('front.pages.article',compact('article'));
    }
    public function blog(Request $request)
    {
        $articles = Article::where(function($q)use($request){
            if($request->category_id!=null)
                $q->where('category_id',$request->category_id);
        })->orderBy('id','DESC')->paginate();
        return view('front.pages.blog',compact('articles'));
    }
}


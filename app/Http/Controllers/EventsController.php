<?php

namespace App\Http\Controllers;

use App\Http\Resources\StoreVenueRequest;
use App\Models\Contact;

use App\Models\Event;
use App\Models\Venue;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Event::orderBy('id', 'DESC')->paginate(10);
        return view('admin.events.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venues = Venue::all()->pluck('name', 'id')->prepend('اختر الملعب', '');
        return view('admin.events.create', compact('venues'));
    }

    public function change_status($status, $id)
    {
        $event = Event::findOrFail($id);
        $event->booking_status = $status;
        $event->save();

        flash()->success('تم تغيير حالة الحجز بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        Event::create($data);
        flash()->success('تم إضافة الحجز بنجاح', 'عملية ناجحة');
        return redirect()->route('admin.events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.events.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Event::findOrFail($id);
        $data->start_time = Carbon::parse($data['start_time'])->translatedFormat("Y-m-dTH:i");
        $venues = Venue::all()->pluck('name', 'id')->prepend('اختر الملعب', '');
        return view('admin.events.edit', compact('data', 'venues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        Event::findOrFail($id)->update($data);
        flash()->success('تم تعديل بيانات الحجز بنجاح', 'عملية ناجحة');
        return redirect()->route('admin.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $venue)
    {
        $venue->delete();
        flash()->success('تم حذف الملعب بنجاح', 'عملية ناجحة');
        return redirect()->route('admin.events.index');
    }
}

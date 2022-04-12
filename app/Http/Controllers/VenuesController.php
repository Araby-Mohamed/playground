<?php

namespace App\Http\Controllers;

use App\Http\Resources\StoreVenueRequest;
use App\Models\Contact;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data =  Venue::orderBy('id','DESC')->paginate(10);
        return view('admin.venues.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.venues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'name'=>"required|max:191|unique:venues,name",
            'address'=>"nullable|max:191",
        ]);
        Venue::create($data);
        flash()->success('تم إضافة الملعب بنجاح','عملية ناجحة');
        return redirect()->route('admin.venues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.venues.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Venue::findOrFail($id);
        return view('admin.venues.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $request->validate([
            'name'=>"required|max:191|unique:venues,name",
            'address'=>"nullable|max:191",
        ]);
        Venue::findOrFail($id)->update($data);
        flash()->success('تم تعديل بيانات الملعب بنجاح','عملية ناجحة');
        return redirect()->route('admin.venues.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venue $venue)
    {
        $venue->delete();
        flash()->success('تم حذف الملعب بنجاح','عملية ناجحة');
        return redirect()->route('admin.venues.index');
    }
}

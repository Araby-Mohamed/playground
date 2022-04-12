<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Venue;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public $sources = [
        [
            'model'      => '\\App\\Models\\Event',
            'date_field' => 'start_time',
            'field'      => 'name',
            'prefix'     => 'Event',
            'suffix'     => '',
            'route'      => 'admin.events.edit',
        ]
    ];

    public function index()
    {
        $events = [];

        $venues = Venue::all();

        foreach ($this->sources as $source) {
            $calendarEvents = $source['model']::where('booking_status','accepted')->when(request('venue_id') && $source['model'] == '\App\Models\Event', function($query) {
                return $query->where('venue_id', request('venue_id'));
            })->get();
            foreach ($calendarEvents as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);
                if (!$crudFieldValue) {
                    continue;
                }
//                $source['prefix'] . " " .
                $events[] = [
                    'title' => trim( $model->{$source['field']}
                        . " " . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }
        return view('admin.calendar.index', compact('events', 'venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->merge([
            'slug'=>\MainHelper::slug($request->slug)
        ]);

        $request->validate([
            'slug'=>"required|max:190|unique:categories,slug",
            'title'=>"required|max:190",
            'description'=>"nullable|max:10000",
            'meta_description'=>"nullable|max:10000",
        ]);
        $category = Category::create([
            'user_id'=>auth()->user()->id,
            "slug"=>$request->slug,
            "title"=>$request->title,
            "description"=>$request->description,
            "meta_description"=>$request->meta_description,
        ]);
        if($request->hasFile('image')){
            $file = $this->store_file([
                'source'=>$request->image,
                'validation'=>"image",
                'path_to_save'=>'/uploads/categories/',
                'type'=>'CATEGORY',
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,1000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ]);
            $category->update(['image'=>$file['filename']]);
        }
        flash()->success('تم إضافة القسم بنجاح','عملية ناجحة');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if(!auth()->user()->has_access_to('update',$category))abort(403);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->merge([
            'slug'=>\MainHelper::slug($request->slug)
        ]);

        if(!auth()->user()->has_access_to('update',$category))abort(403);
        $request->validate([
            'slug'=>"required|max:190|unique:categories,slug,".$category->id,
            'title'=>"required|max:190",
            'description'=>"nullable|max:10000",
            'meta_description'=>"nullable|max:10000",
        ]);
        $category->update([
            "slug"=>$request->slug,
            "title"=>$request->title,
            "description"=>$request->description,
            "meta_description"=>$request->meta_description,
        ]);
        if($request->hasFile('image')){
            $file = $this->store_file([
                'source'=>$request->image,
                'validation'=>"image",
                'path_to_save'=>'/uploads/categories/',
                'type'=>'CATEGORY',
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,1000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ]);
            $category->update(['image'=>$file['filename']]);
        }
        flash()->success('تم تحديث القسم بنجاح','عملية ناجحة');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(!auth()->user()->has_access_to('delete',$category))abort(403);
        $category->delete();
        flash()->success('تم حذف القسم بنجاح','عملية ناجحة');
        return redirect()->route('admin.categories.index');
    }
}

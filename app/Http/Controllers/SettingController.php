<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
class SettingController extends Controller
{

    public function index()
    {
        $settings = Setting::firstOrCreate();
        return view('admin.settings.index',compact('settings'));
    }

    public function update(Request $request)
    {
        \App\Models\Setting::query()->update([
            'website_name'=>$request->website_name,
            'address'=>$request->address,
            'website_bio'=>$request->website_bio,
            'contact_email'=>$request->contact_email,
            'reservation_price'=>$request->reservation_price,
            'main_color'=>$request->main_color,
            'hover_color'=>$request->hover_color,
            'phone'=>$request->phone,
            'phone2'=>$request->phone2,
            'whatsapp_phone'=>$request->whatsapp_phone,
            'facebook_link'=>$request->facebook_link,
            'twitter_link'=>$request->twitter_link,
            'instagram_link'=>$request->instagram_link,
            'youtube_link'=>$request->youtube_link,
            'telegram_link'=>$request->telegram_link,
            'whatsapp_link'=>$request->whatsapp_link,
            'tiktok_link'=>$request->tiktok_link,
            'nafezly_link'=>$request->nafezly_link,
            'linkedin_link'=>$request->linkedin_link,
            'github_link'=>$request->github_link,
            'another_link1'=>$request->another_link1,
            'another_link2'=>$request->another_link2,
            'another_link3'=>$request->another_link3,
            'privacy_page'=>$request->privacy_page,
            'terms_page'=>$request->terms_page,
            'about_page'=>$request->about_page,
            'contact_page'=>$request->contact_page,
            'header_code'=>$request->header_code,
            'footer_code'=>$request->footer_code,
            'robots_txt'=>$request->robots_txt,
        ]);

        if($request->hasFile('website_logo')){
            $file = $request->file('website_logo');
            $ext = $file->getClientOriginalExtension();
            // Move Image To Folder ..
            $fileNewName = 'img_' . time() . '.' . $ext;
            $file->move(public_path('/uploads/setting'), $fileNewName);
            \App\Models\Setting::query()->update(['website_logo'=>$fileNewName]);
        }
        if($request->hasFile('website_wide_logo')){
            $file = $request->file('website_wide_logo');
            $ext = $file->getClientOriginalExtension();
            // Move Image To Folder ..
            $fileNewName = 'img_' . time() . '.' . $ext;
            $file->move(public_path('/uploads/setting'), $fileNewName);
            \App\Models\Setting::query()->update(['website_wide_logo'=>$fileNewName]);
        }
        if($request->hasFile('website_icon')){
            $file = $request->file('website_icon');
            $ext = $file->getClientOriginalExtension();
            // Move Image To Folder ..
            $fileNewName = 'img_' . time() . '.' . $ext;
            $file->move(public_path('/uploads/setting'), $fileNewName);
            \App\Models\Setting::query()->update(['website_icon'=>$fileNewName]);
        }


        if($request->hasFile('website_cover')){
            $file = $request->file('website_cover');
            $ext = $file->getClientOriginalExtension();
            // Move Image To Folder ..
            $fileNewName = 'img_' . time() . '.' . $ext;
            $file->move(public_path('/uploads/setting'), $fileNewName);
            \App\Models\Setting::query()->update(['website_cover'=>$fileNewName]);
        }
        flash()->success('???? ?????????? ?????????????????? ??????????','?????????? ??????????');
        return redirect()->back();

    }

}

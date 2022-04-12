<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{

    public function run()
    {
        $settings = \App\Models\Setting::count();
        if($settings==0){
            \App\Models\Setting::create([
                'website_logo'=>'logo.png',
                'website_icon'=>'icon.png',
            ]);
        }
    }
}

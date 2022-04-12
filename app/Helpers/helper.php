<?php

if (!function_exists('settings')) {
    function settings()
    {
        return App\Models\Setting::first();
    }
}

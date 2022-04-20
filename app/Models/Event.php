<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $guarded = [''];
    protected $appends = ['booking'];
//    public function getStartTimeAttribute($value)
//    {
//        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format("Y-m-dTH:i") : null;
//    }

//    public function setStartTimeAttribute($value)
//    {
//        $this->attributes['start_time'] = $value ? Carbon::createFromFormat("Y-m-dTH:i", $value)->format('Y-m-d H:i:s') : null;
//    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }


    public function getBookingAttribute()
    {
        if ($this->booking_status == 'pending') {
            return 'تحت المراجعة';
        } elseif ($this->booking_status == 'accepted') {
            return 'تم الموافقة';
        } elseif ($this->booking_status == 'rejected') {
            return 'تم الرفض';
        } elseif ($this->booking_status == 'completed') {
            return 'حجز مكتمل';
        } elseif ($this->booking_status == 'not_completed') {
            return 'الحجز لم يكتمل';
        }
    }

}

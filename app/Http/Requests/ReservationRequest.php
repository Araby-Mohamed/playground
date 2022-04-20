<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $today = Carbon::now();
        return [
            'name' => "required|string|max:191",
            'phone' => "required|string|max:191",
            'amount' => "required|numeric",
            'deposit' => "required|numeric",
            'remain' => "required|numeric",
            'start_time' => "required|date|after:".$today,
            'venue_id' => "required|exists:venues,id",
        ];
    }
}

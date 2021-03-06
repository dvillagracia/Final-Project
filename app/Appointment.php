<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable =['title', 'description', 'date', 'start', 'end', 
                            'user_id', 'patient_id', 'color'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function patient()
    {
        return $this->hasOne('App\Patient');
    }
    
    public function getStartAttribute($value)
    {
        $dateStart = Carbon::createFormFormat('Y-m-d H:i', $value)->format('Y-m-d');
        $timeStart = Carbon::createFormFormat('Y-m-d H:i', $value)->format('H:i');

        return $this->start = ($timeStart == '00:00' ? $dateStart : $value);
    }

    public function getEndAttribute($value)
    {
        $dateEnd = Carbon::createFormFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeEnd = Carbon::createFormFormat('Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->end = ($timeEnd == '00:00' ? $dateEnd : $value);
    }
    
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Appointment extends Model
{
   protected $fillable = [
       'date','time','user_id','status'
    ];
     public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

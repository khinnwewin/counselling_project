<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Category extends Model
{
   
    protected $fillable = [
        'counsel','user_id'
    ];
     public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

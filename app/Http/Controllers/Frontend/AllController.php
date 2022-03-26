<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\User;
use App\Model\Appointment;
use App\Http\Requests\Backend\AppointmentRequest;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostStored;
use Auth;
class AllController extends Controller
{
    public function question(){

        $categories=Category::All();
        return view('frontend.counseller',compact('categories'));
    }

    public function counseller_list($id)
    {
        $categories=Category::find($id);
         // dd($categories);
        $users=User::where('usertype', '=', 'Counseller')->get();
        // dd($user);
        return view('frontend.counseller_list', compact('categories','users'));
       
    }
    public function counseller_detail($id)
    {

        $users=User::find($id);
        // dd($users);
         // dd($users->name);
        return view('frontend.counseller_detail', compact('users'));
       
    }
    public function appointment($id)
    {
        $users=User::find($id);
        // dd($users);
        $appointments=Appointment::get();
        // dd($users);
         // dd($users->name);

        return view('frontend.appointment', compact('users','appointments'));
       
    }
   
      public function store(AppointmentRequest $request)
    {
        // dd($request->all('email'));
        // dd($request->user()->email);
        $appointment=Appointment::create($request->all());
        Mail::to($request->all('email'))->send(new PostStored($appointment));

    }
   
    
}

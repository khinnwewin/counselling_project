<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Appointment;
use App\User;
use App\Http\Requests\Backend\AppointmentRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserStored;
Use Alert;
class AppointmentController extends Controller
{
    //
    public function index()
    {
        $appointments = Appointment::All();
        return view('admin.appointment.index',compact('appointments'));
    }

    public function show($id)
    {
        $appointment = Appointment::find($id);
        if (empty($appointment)) {
            Flash::error('Appointment not found');
            return redirect(route('admin.appointment.index'));
        }

        return view('admin.appointment.show', compact('appointment'));
    }
     public function update(Request $request, $id)
    {
      
        $appointment = Appointment::find($id);
        if(empty($appointment)) {
            Alert::error('Error', 'Appointment Not Found');
            return redirect(route('admin.appointment.index'));
        }
        $appointment->update($request->all());
         Mail::to('khinnwewin010@gmail.com')->send(new UserStored($appointment));

        Alert::success('Success', 'Successfully Updated Appointment');
        return redirect(route('appointment.index'));
    }

}

<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Appointment;
Use Alert;
class AppointmentController extends Controller
{
    //
    public function index()
    {

        $appointments = Appointment::get();
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
        Alert::success('Success', 'Successfully Updated Appointment');
        return redirect(route('appointment.index'));
    }

}

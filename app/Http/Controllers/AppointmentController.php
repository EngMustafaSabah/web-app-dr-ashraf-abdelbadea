<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function createAppointment(){


        return view("appointments.create");
    }

    public function store(Request $request){

        $this->validate($request,[
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
        ]);
        $data=$request->all();
        $patientData=$request->except('note','_token','date');


        $patient=Patient::firstOrCreate($patientData);
        $appointment=Appointment::create([
            "patient_id"=>$patient->id,
            "appointment_time"=>$data['date'],
            "note"=>$data['note'],
        ]);
            session()->flash("success",__("created"));
        Notification::make()
            ->title('Saved successfully')
            ->body('Changes to the **post** have been saved.')
//            ->actions([
//                Action::make('view')
//                    ->button()
//                    ->url(route('appointments.show', $appointment), shouldOpenInNewTab: true)
//       ])
            ->success()
            ->send();
        return __("Appointments");
    }
}

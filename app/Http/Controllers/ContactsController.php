<?php

namespace App\Http\Controllers;

use App\Filament\Resources\ContactsResource;
use App\Models\Contacts;
use App\Models\Patient;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $this->validate($request,[
            "name"=>"required",
            "email"=>"required",
//            "phone"=>"required",
        ]);
        $data=$request->all();


        $patientData=$request->except('message','_token',);


        $patient=Patient::firstOrCreate($patientData);
        $contacts=Contacts::create([
            "patient_id"=>$patient->id,
            "message"=>$data['message'],
        ]);
        session()->flash("success",__("created"));
        Notification::make()
            ->title('new contacts added')
            ->body("$patient->name  say  $contacts->message")
//            ->actions([
//                Action::make('view')
//                    ->button()
//                    ->url(ContactResource::getUrl('edit',['record'=>$contacts->id])
//                    )
//       ])
            ->success()
            ->sendToDatabase(auth()->user());

        return __("Appointments");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}

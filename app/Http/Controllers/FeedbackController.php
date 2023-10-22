<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function create(){


        return view("feedback.create");
    }


    public function store(Request $request){
        $this->validate($request,[
           "name"=>"required",
           "email"=>"required|email" ,
           "message"=>"required" ,
        ]);

        $data=$request->all();

        $feedback=Feedback::create($data);

        session()->flash("success",__("created"));
        $users=User::all();
        foreach ($users as $user){
            Notification::make()
                ->title('new feedback added')
                ->body("$feedback->name  say  $feedback->message")
//            ->actions([
//                Action::make('view')
//                    ->button()
//                    ->url(ContactResource::getUrl('edit',['record'=>$contacts->id])
//                    )
//       ])
                ->success()
                ->sendToDatabase($user);
        }

        return __("feedback");
    }
}

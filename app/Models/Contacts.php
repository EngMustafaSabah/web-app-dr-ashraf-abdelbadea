<?php

namespace App\Models;

use App\Notifications\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class Contacts extends Model
{
    use HasFactory;
    protected $guarded=[];




    public function patient(){

       return $this->belongsTo(Patient::class);
    }

    public static function boot() {

        parent::boot();

        static::created(function ($item) {
            Mail::to(env("MAIL_FROM_ADDRESS"))->send(new \App\Mail\ContactMail($item));


        });
    }
}

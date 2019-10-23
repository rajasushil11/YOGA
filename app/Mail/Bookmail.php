<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class Bookmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
         return $this->from('info@shivalayayogaashram.com.np','SHIVALAYA')->view('booking',['na'=>$request->name, 'em'=>$request->email,'ge'=>$request->gender, 
         'co'=>$request->country, 'cs'=>$request->course, 'jd'=>$request->joining_date, 'fd'=>$request->food, 'ac'=>$request->accommodation, 'msg'=>$request->message,
         'num'=>$request->number])->to('shivalayayogaschool975@gmail.com','SHIVALAYA')->subject('Email For Booking');
                        
    }
}

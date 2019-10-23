<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class Enquirymail extends Mailable
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
         return $this->from('info@shivalayayogaashram.com.np','SHIVALAYA')->view('userenquiry',['na'=>$request->name, 'em'=>$request->email,'msg'=>$request->message,'num'=>$request->number])->to('shivalayayogaschool975@gmail.com','SHIVALAYA')->subject('Email For Enquiry');
                        
    }
}

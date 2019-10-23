<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class Reviewmail extends Mailable
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
         return $this->from('info@shivalayayogaashram.com.np','SHIVALAYA')->view('userreview',['na'=>$request->name, 'em'=>$request->email,'msg'=>$request->review])->to('shivalayayogaschool975@gmail.com','SHIVALAYA')->subject('Email For Reviews');
                        
    }
}

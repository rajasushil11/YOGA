<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class Subscribe extends Mailable
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
         return $this->from('info@shivalayayogaashram.com.np','SHIVALAYA')->view('subscribe',['msg'=>$request->email])->to('shivalayayogaschool975@gmail.com','SHIVALAYA')->subject('Email For Subscribe');
                        
    }
}

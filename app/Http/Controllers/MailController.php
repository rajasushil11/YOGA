<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\Render;
use App\Mail\Subscribe;
use App\Mail\Reviewmail;
use App\Mail\Enquirymail;
use App\Mail\Bookmail;
use App\Subscription;
use App\Review;
use App\Enquiry;
use App\User;
use App\Detail;


class MailController extends Controller 
{
  

   /**
     * Send Render E-mail Example
     *
     * @return void
     */

   public function welcomeMail()
    {
        
        Mail::send(new Render);
        session()->flash('success', 'We will be replying You within 24Hrs. Thank You');
        return redirect()->back()->with('message', 'Thanks for the message! We will get back to you soon!'); 
    }

    public function subscribe(Request $request)
    {
      $User['email'] = $request['email'];


        // Must not already exist in the `email` column of `users` table
        $rules = array('email' => 'unique:subscriptions,email');

        $validator = Validator::make($User, $rules);

        if ($validator->fails()) {
            session()->flash('failure', 'This Email id is already Subscribed.');
             
             return redirect('/.#sub');
        

    
    }
    else {
      
        Subscription::create([
            'email'=> $request['email'],
            'status'=> "Yes",
            
      ]);

        Mail::send(new Subscribe);
        session()->flash('success', 'Successfully Subscribed!.');
        return redirect('/.#sub');
       
      
      }
    }

      public function userreview(Request $request)
    {
      
        Review::create([
            'email'=> $request['email'],
            'name'=> $request['name'],
            'review'=> $request['review'],
            
            
      ]);

        Mail::send(new Reviewmail);
        session()->flash('success', 'Thank You for your Reviews');
        return redirect()->back()->with('message', 'Thanks for the message! We will get back to you soon!'); 
       
      
      }

       public function userenquiry(Request $request)
    {
      
        Enquiry::create([
            'email'=> $request['email'],
            'name'=> $request['name'],
            'number'=> $request['number'],
            'message'=> $request['message'],
            
            
      ]);

        Mail::send(new Enquirymail);
        session()->flash('success', 'We will be replying You within 24Hrs. Thank You');
        return redirect()->back()->with('message', 'Thanks for the message! We will get back to you soon!'); 
       
      
      }
      
        public function updateDetails(Request $request){

        
        Detail::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'country' => $request['country'],
            'course' => $request['course'],
            'joining_date' => $request['joining_date'],
            'accommodation' => $request['accommodation'],
            'food' => $request['food'],
            'number' => $request['number'],
            'message' => $request['message'],

        ]);

         
        Mail::send(new Bookmail);
        return redirect('/thank-you'); 
    }
      
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{

    public function shivalaya200(){

        return view('/shivalaya200yttc');
    }

    public function shivalaya300(){

        return view('/shivalaya300yttc');
    }

    public function shivalaya500(){

        return view('/shivalaya500yttc');
    }
    public function shivalaya200tantra(){

        return view('/shivalaya200tantrayttc');
    }

    public function shivalayayttc(){

        return view('/shivalayayttc');
    }
    
    public function curriculum200(){

        return view('/curriculum200');
    }

    public function curriculum300(){

        return view('/curriculum300');
    }
    public function curriculum500(){

        return view('/curriculum500');
    }

    public function beginnersyoga(){

        return view('/beginnersyoga');
    }
    
    public function meditation(){

        return view('/meditation');
    }
    public function trek(){

        return view('/trek');
    }
    
    public function features(){

        return view('/features');
    }

    public function gallery(){

        return view('/gallery');
    }
    public function about(){

        return view('/about');
    }
    public function accommodation(){

        return view('/accommodation');
    }

    public function location(){

        return view('/location');
    }
    

    public function contact(){

        return view('/contact');
    }
    
    public function register(){

        return view('register');
    }
    
    public function detailForm(){

        return view('details-form');
    }
    
     public function thankYou(){

        return view('thnk-you');
    }
    
    public function teachersBio(){

        return view('teachers-bio');
    }

    public function spiritual(){
        return view('spiritualretreat');
    }

    public function organicGarden(){
        return view('organic-garden');
    }
        public function RetreatChakraAwakening(){
        return view('RetreatChakraAwakening');
    }
        public function RetreatJourneyBackToNature(){
        return view('RetreatJourneyBackToNature');
    }
            public function RetreatYogaSadhana(){
        return view('RetreatYogaSadhana');
    }
        public function t235(){
        return view('t235');
    }

}
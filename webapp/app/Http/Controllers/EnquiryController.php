<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function store(Request $request){
        $data = request()->validate([
            'fullname'=> 'required',
            'subject'=> 'required',
            'phone'=> 'required',
            'email'=> ['required', 'email'],
            'enquiry'=> 'required'
        ]);

        try{
            Enquiry::create($data);
            try{
                $enquiries = Enquiry::latest('id')->first();
                Mail::to('kabiryusufbashir@gmail.com')
                    ->cc('abdulbash3k@gmail.com')
                    ->bcc('info@ameccad.com')
                    ->send(new EnquiryMail($enquiries));
                return redirect('/contact')->with('success','Thanks for contacting Ameccad Training Institute');    
    
            }catch(Exception $e){
                return redirect('/contact')->with('error', $e->getMessage());    
            }
        }catch(Exception $e){
            return redirect('/contact')->with('error', $e->getMessage());    
        }
    }
}

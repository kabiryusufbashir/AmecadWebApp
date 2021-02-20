<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplyCourse;

use App\Mail\ApplyCourseSend;
use Illuminate\Support\Facades\Mail;

class ApplyCourseController extends Controller
{
    public function store(Request $request){
        $data = request()->validate([
            'full_name'=> 'required',
            'gender'=> 'required',
            'dob'=> 'required',
            'phone'=> 'required',
            'email'=> ['required', 'email'],
            'address'=> 'required',
            'course'=> 'required'
        ]);

        try{
            ApplyCourse::create($data);
            try{
                Mail::to('kabiryusufbashir@gmail.com')
                    ->cc('abdulbash3k@gmail.com')
                    ->bcc('info@ameccad.com')
                    ->send(new ApplyCourseSend($applycourse));
                return redirect('/')->with('success','Application recieved successful!');    
    
            }catch(Exception $e){
                return redirect('/')->with('error', $e->getMessage());    
            }
        }catch(Exception $e){
            return redirect('/')->with('error', $e->getMessage());    
        }
    }
}

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
                $applycourse = ApplyCourse::latest('id')->first();
                Mail::to('kabiryusufbashir@gmail.com')->send(new ApplyCourseSend($applycourse));
            }catch(Exception $e){
                return redirect('/')->with('error', $e->getMessage());    
            }
        }catch(Exception $e){
            return redirect('/')->with('error', $e->getMessage());    
        }
    }
}

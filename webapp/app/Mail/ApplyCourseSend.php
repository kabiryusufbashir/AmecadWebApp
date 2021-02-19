<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ApplyCourse;

class ApplyCourseSend extends Mailable
{
    use Queueable, SerializesModels;

    public $applycourse;
    
    public function __construct(ApplyCourse $applycourse)
    {
        $this->applycourse = $applycourse;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->applycourse->email)
                    ->with([
                        'name' => $this->applycourse->full_name,
                        'gender' => $this->applycourse->gender,
                        'dob' => $this->applycourse->dob,
                        'phone' => $this->applycourse->phone,
                        'address' => $this->applycourse->address,
                        'email' => $this->applycourse->email,
                        'course' => $this->applycourse->course
                    ])
                    ->subject('Ameccad Course Application')
                    ->view('emails.applycourse');
                    
    }
}

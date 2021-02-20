<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Enquiry;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiries;
    
    public function __construct(Enquiry $enquiries)
    {
        $this->enquiries = $enquiries;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->enquiries->email)
                    ->with([
                        'fullname' => $this->enquiries->fullname,
                        'subject' => $this->enquiries->subject,
                        'phone' => $this->enquiries->phone,
                        'email' => $this->enquiries->email,
                        'enquiry' => $this->enquiries->enquiry
                    ])
                    ->subject('Ameccad Contact Form')
                    ->view('emails.contactform');
    }
}

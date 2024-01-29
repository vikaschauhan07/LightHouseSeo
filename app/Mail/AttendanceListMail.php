<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AttendanceListMail extends Mailable
{
    use Queueable, SerializesModels;

    public $presentData;

    public function __construct($presentList)
    {
        $this->presentData = $presentList;
    }

    public function build()
    {
        return $this->subject('Attendance List')->view('emails.attendanceList');
    }
}

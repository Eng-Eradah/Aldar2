<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResendActivationEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('templates.resend_activation_email')
        ->subject('مرحبا بك في دليل المستثمر')
        ->withSwiftMessage(function ($message) {
            $message->getHeaders();
               // ->addTextHeader('Custom-Header', 'HeaderValue');
        });
    }
}

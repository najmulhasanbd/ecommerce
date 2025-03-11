<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Ordermail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->order = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('najmulcse247@gmail.com')
                    ->subject('Order Confirmation') // Set a meaningful subject
                    ->view('mail.order') // Ensure this view exists
                    ->with(['order' => $this->order]);
    }
}

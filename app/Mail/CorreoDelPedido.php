<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CorreoDelPedido extends Mailable
{
    use Queueable, SerializesModels;

        public $info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
       $this->info = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Correo confirmación de pedido')->view('pedidosMail');
    }
}

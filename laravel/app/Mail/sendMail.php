<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hi@quemindica.io')
            ->subject('Você foi indicado')
            ->view('email.email')
            ->with([
                'conteudo' => 'Olá, estamos enviando este email pra informar que você foi indicado na plataforma Quem Indica, acesse agora mesmo com o código que está abaixo para saber mais.'
                ]);
    }
}

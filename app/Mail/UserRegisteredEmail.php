<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class UserRegisteredEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Conta criada com sucesso!')
        //->replyTo('') Para definir qual email deverá ser usado em caso de resposta
        ->view('emails.user-registered')
        //->with(['user' => $this->user]) // somente deve ser utilizado desta forma quando o atributo não for público, senão, o laravel já faz o bind
        ;
    }
}

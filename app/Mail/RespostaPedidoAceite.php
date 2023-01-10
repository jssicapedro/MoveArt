<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use App\Models\PedidoProfessor;

class RespostaPedidoAceite extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct(PedidoProfessor $details)
    {
        $this->details = $details;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Resposta Pedido Aceite',
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.pedidoprofessorAceite',
        );
    }

    public function attachments()
    {
        return [];
    }
}

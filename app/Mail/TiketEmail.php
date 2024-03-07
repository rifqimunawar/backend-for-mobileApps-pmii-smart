<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TiketEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data_email;
    // public $dataEvent;
    // public $dataTiket;
    // public $dataQrCode;
    /**
     * Create a new message instance.
     */
    // public function __construct($dataTiket, $dataEvent, $dataQrCode)
    // {
    //   $this->dataEvent = $dataEvent;
    //   $this->dataTiket = $dataTiket;
    //   $this->dataQrCode = $dataQrCode;
    // }
    public function __construct($data_email)
    {
        $this->data_email = $data_email;
    }
    
    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Tiket Email',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    public function build (){
      return $this ->subject($this->data_email['subject'])
      ->from ($this->data_email['sender_name'])
      ->view('mail.tiket-email');
    }


    // public function content(): Content
    // {
    //     $content = new Content(view: 'mail.tiket-email');
    //     $content = $content->with([
    //         'dataEvent' => $this->dataEvent,
    //         'dataTiket' => $this->dataTiket,
    //         'dataQrCode' => $this->dataQrCode,
    //     ]);
    //     return $content;
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

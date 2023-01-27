<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
  use Queueable, SerializesModels;

  private $data;
  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($data)
  {
    $this->data = $data;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    // dados para o envio do email
    return $this
      ->from(config('mail.from.address'))
      ->to(config('mail.from.address'))
      ->subject('Contato do Site Rigo Energia')
      ->view('site.layouts.contact.message')
      ->with('data', $this->data);
  }
}

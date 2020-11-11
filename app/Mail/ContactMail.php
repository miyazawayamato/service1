<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    //注文インスタンス
    private $name;
    private $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        //新しいメッセージインスタンスの生成
        $this->email = $inputs['email'];
        $this->name = $inputs['name'];
        $this->body  = $inputs['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->from('bmiyazawayamato@gmail.com')
                    ->subject('自動送信メール')
                    ->view('emails.mail');
    }
}

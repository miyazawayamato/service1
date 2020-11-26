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
    private $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        //新しいメッセージインスタンスの生成
        $this->email = $input['email'];
        $this->name = $input['name'];
        $this->body  = $input['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->from('official@dokusika.deca.jp')
                    ->subject('自動送信メール')
                    ->view('emails.mail')
                    ->with([
                        'email' => $this->email,
                        'name' => $this->name,
                        'body'  => $this->body,
                    ]);
    }
}

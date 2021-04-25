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
        //fromから送信する この際のアドレスはどうでもいい
        //メールアドレスは一時的に入れてない
        //return $this->from('official@dokusika.deca.jp')
        return $this->from('')
                    ->subject('お問い合わせメール')
                    ->view('emails.mail')
                    ->with([
                        'email' => $this->email,
                        'name' => $this->name,
                        'body'  => $this->body,
                    ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
	use Queueable, SerializesModels;

	public $email;
	public $phone;
	public $name;
    public $msg;
	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($name, $email, $phone, $msg)
	{
		$this->phone = $phone;
		$this->name = $name;
        $this->email = $email;
        $this->msg = $msg;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
        // dd($this->message);
		return $this->subject('Contact from ' . $this->name)
					->view('emails.contact');
	}
}

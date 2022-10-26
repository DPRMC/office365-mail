<?php

namespace DPRMC\Tests\Resources;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class MailableTest extends Mailable {

    use Queueable, SerializesModels;

    protected string $message;

    /**
     * Create a new message instance.
     * @return void
     */
    public function __construct(string $message) {
        $this->message = $message;
    }


    /**
     * Build the message.
     * @return $this
     */
    public function build() {
        return $this->subject("Test Email")
            ->from('fims@deerparkrd.com', 'FIMS')
            ->with([
                'message' => $this->message,
            ]);
    }

}

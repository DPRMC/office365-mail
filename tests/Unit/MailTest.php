<?php

namespace DPRMC\Tests\Unit;

use DPRMC\Tests\Resources\MailableTest;
use Illuminate\Support\Facades\Mail;

class MailTest extends BaseTestCase {

    /**
     * @test
     */
    public function testDefault() {

        dump(config('mail'));
        $result = Mail::to('mdrennen@deerparkrd.com')->send(new MailableTest("My message"));
        //dd($result);
    }


}

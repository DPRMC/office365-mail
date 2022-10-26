<?php

namespace DPRMC\Tests\Unit;

abstract class BaseTestCase extends \Orchestra\Testbench\TestCase {

    protected function getEnvironmentSetUp($app) {
        /**
         * 'mailers' => [
            'microsoft-graph' => [
            'transport' => 'office365mail',
            'tenant' => env('MAIL_MSGRAPH_TENANT', 'common'),
            'client' => env('MAIL_MSGRAPH_CLIENT'),
            'secret' => env('MAIL_MSGRAPH_SECRET')
            ]
         */
        $app['config']->set('mail.mailers.office365mail.transport', 'office365mail');
        $app['config']->set('mail.mailers.office365mail.tenant', env('MAIL_MSGRAPH_TENANT', 'common'));
        $app['config']->set('mail.mailers.office365mail.client', env('MAIL_MSGRAPH_CLIENT'));
        $app['config']->set('mail.mailers.office365mail.secret', env('MAIL_MSGRAPH_SECRET'));
        $app['config']->set('mail.default', 'office365mail');
    }



}

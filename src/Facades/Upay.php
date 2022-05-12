<?php

namespace TonySapay\Upay\Facades;

use TonySapay\Upay\UpayApiClient;

class Upay extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return UpayApiClient::class;
    }
}
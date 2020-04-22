<?php

namespace ShankargDev\PayPal\Facades;

/*
 * Class Facade
 * @package ShankargDev\PayPal\Facades
 * @see ShankargDev\PayPal\ExpressCheckout
 */

use Illuminate\Support\Facades\Facade;

class PayPal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ShankargDev\PayPal\PayPalFacadeAccessor';
    }
}

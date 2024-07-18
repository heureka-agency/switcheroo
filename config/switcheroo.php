<?php

return [
    /**
     * Add any currencies you would like to handle with Switcheroo.
     * You can select all currencies using \HeurekaAgency\Switcheroo\Enums\Currency::all()
     */
    'enabled_currencies' => [
        \HeurekaAgency\Switcheroo\Enums\Currency::EUR,
        \HeurekaAgency\Switcheroo\Enums\Currency::USD,
        \HeurekaAgency\Switcheroo\Enums\Currency::GBP,
    ],

    /**
     * Set the default currency of the currency switcher.
     */
    'default_currency' => \HeurekaAgency\Switcheroo\Enums\Currency::EUR
];

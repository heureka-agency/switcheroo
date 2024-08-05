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
    'default_currency' => \HeurekaAgency\Switcheroo\Enums\Currency::EUR,

    /**
     * Event settings
     *
     * Switcheroo dispatches a CurrencySwitched event when a currency switch occurs.
     * You may listen to this event in your app using a Listener and/or Laravel Echo.
     */
    'events' => [
        'broadcast' => true, // Set to true if the event should be broadcast by default. You can override this by enabling/disabling it when including the Switcheroo switcher in your app.
        'private' => true // Set to true if the event should be broadcast by default on a private channel. You can override this by enabling/disabling it when including the Switcheroo switcher in your app.
    ]

];

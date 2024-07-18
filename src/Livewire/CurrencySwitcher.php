<?php

namespace HeurekaAgency\Switcheroo\Livewire;


use HeurekaAgency\Switcheroo\Enums\Currency;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class CurrencySwitcher extends Component
{
    public array $currencies = [];

    public ?Currency $selectedCurrency = null;

    public function mount(): void
    {
        // Set the available currencies from config.
        $this->currencies = config('switcheroo.enabled_currencies');

        // Set the default currency if not set yet.
        $this->selectedCurrency = config('switcheroo.default_currency');
    }

    public function render(): View
    {
        return view('switcheroo::livewire.currency-switcher');
    }

    // Event handler for the 'currency-selected' event.
    #[On('currency-selected')]
    public function setSelectedCurrency(string $currency): void
    {
        $this->selectedCurrency = Currency::from($currency);
    }

    public function getCurrencyFlag($currencyCode): string
    {
        return Currency::from($currencyCode)->flag();
    }
}

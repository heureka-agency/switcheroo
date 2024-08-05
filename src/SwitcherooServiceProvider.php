<?php

namespace HeurekaAgency\Switcheroo;

use HeurekaAgency\Switcheroo\Livewire\CurrencySwitcher;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SwitcherooServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('switcheroo')
            ->hasConfigFile()
            ->hasRoute('channels')
            ->hasAssets()
            ->hasViews()
            ->hasTranslations();
    }

    public function packageBooted(): void
    {
        $this->registerLivewireComponents();
    }

    private function registerLivewireComponents(): void
    {
        Livewire::component('switcheroo::currency-switcher', CurrencySwitcher::class);
    }
}

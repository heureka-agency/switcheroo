<?php

namespace HeurekaAgency\Switcheroo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SwitcherooServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('switcheroo')
            ->hasConfigFile()
            ->hasAssets()
            ->hasViews()
            ->hasTranslations();
    }
}

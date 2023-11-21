<?php

namespace MicroweberPackages\Templates\Tailwind\Providers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TailwindServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('microweber-templates-tailwind');
        $package->hasViews('microweber-templates-tailwind');
    }

    public function register(): void
    {
        parent::register();
    }

}

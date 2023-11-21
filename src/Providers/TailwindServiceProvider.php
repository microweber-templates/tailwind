<?php

namespace MicroweberPackages\Templates\Tailwind\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
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

        View::addNamespace('microweber-module-social-links',
            __DIR__ . '/../resources/views/modules/social_links');

        
    }

}

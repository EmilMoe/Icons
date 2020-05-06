<?php

namespace EmilMoe\Icons;

use EmilMoe\Icons\Components\Icon;
use EmilMoe\Icons\Components\Generic;
use Illuminate\Support\ServiceProvider;

class IconServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        view()->addNamespace('Icon', __DIR__ .'/resources/views');
        $this->loadViewComponentsAs('icon', [
            Generic::class,
            Icon::class,
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

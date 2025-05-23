<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\Helper;

/**
 * Class HelperServiceProvider
 * @package App\Providers
 */
class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Helper', function()
        {
            return new Helper;
        });
    }
}

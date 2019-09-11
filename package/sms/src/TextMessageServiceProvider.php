<?php

namespace Yarteyd\SMS;

use Log;

use Illuminate\Support\ServiceProvider;

class TextMessageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->mergeConfigFrom(
            __DIR__.'/config/sms.php', 'courier'
        );
    }
    public function register()
    {

    }
}

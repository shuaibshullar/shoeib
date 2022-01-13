<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade as b;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public' , function (){
            return base_path();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        b::directive('datetime', function () {
            return "<?php echo date('m/d/Y H:i') ?>";
        });

        b::component('app-layout' , \App\View\Components\MainLayout::class);
    }
}

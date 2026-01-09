<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
  // File: app/Providers/AppServiceProvider.php

public function boot(): void
{
    // Gunakan serverKey (K besar) sesuai file services.php Anda
    \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
    \Midtrans\Config::$clientKey = config('services.midtrans.clientKey');

    \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
    \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
    \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
}
}

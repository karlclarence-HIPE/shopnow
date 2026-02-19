<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

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
    public function boot(): void
    {
        //
        $this->overrideSanctumConfigurationToSupportRefreshToken();
    }

    private function overrideSanctumConfigurationToSupportRefreshToken()
    {
        Sanctum::$accessTokenAuthenticationCallback = function ($accessToken, $isValid) {
            $abilities = collect($accessToken->abilities);

            
            return $isValid;
        };

        Sanctum::$accessTokenRetrievalCallback = function ($request) {
            if (!$request->routeIs('refresh')) {
                return str_replace('Bearer ', '', $request->headers->get('Authorization'));
            }

            return $request->cookie('refreshToken') ?? '';
        }
    }
}

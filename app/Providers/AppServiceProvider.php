<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;
use App\Http\ViewComposers\NavigationComposer;

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
        // 共享网站设置到所有视图
        try {
            $apiBaseUrl = config('setting.api_base_url', 'https://admin-filament.dev-vue.com/api/v1');
            $response = Http::get("{$apiBaseUrl}/setting");
            $setting = $response->successful() ? ($response->json()['data'] ?? []) : [];

            View::share('setting', $setting);
        } catch (\Exception $e) {
            View::share('setting', []);
            \Log::error('Failed to fetch site settings: ' . $e->getMessage());
        }

        // 注册导航菜单组件
        View::composer('layouts.header', NavigationComposer::class);
    }
}

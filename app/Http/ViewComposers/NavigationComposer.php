<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class NavigationComposer
{
    protected $apiBaseUrl = 'https://admin-filament.dev-vue.com/api/v1';

    public function compose(View $view)
    {
        try {
            // 获取网站设置
            $settingResponse = Http::get("{$this->apiBaseUrl}/setting");
            $setting = $settingResponse->successful() ? ($settingResponse->json()['data'] ?? []) : [];

            // 获取关于我们的文章
            $aboutResponse = Http::get("{$this->apiBaseUrl}/post-categories/1/posts");
            $aboutPosts = $aboutResponse->successful() ? ($aboutResponse->json()['data']['posts'] ?? []) : [];

            // 获取国际竞赛的文章
            $competitionResponse = Http::get("{$this->apiBaseUrl}/post-categories/3/posts");
            $competitionPosts = $competitionResponse->successful() ? ($competitionResponse->json()['data']['posts'] ?? []) : [];

            // 获取合作项目的文章
            $cooperationResponse = Http::get("{$this->apiBaseUrl}/post-categories/4/posts");
            $cooperationPosts = $cooperationResponse->successful() ? ($cooperationResponse->json()['data']['posts'] ?? []) : [];

            $view->with([
                'setting' => $setting,
                'aboutPosts' => $aboutPosts,
                'competitionPosts' => $competitionPosts,
                'cooperationPosts' => $cooperationPosts,
            ]);
        } catch (\Exception $e) {
            // 如果 API 调用失败，返回空数组
            $view->with([
                'setting' => [],
                'aboutPosts' => [],
                'competitionPosts' => [],
                'cooperationPosts' => [],
            ]);

            // 记录错误日志
            \Log::error('Failed to fetch navigation data: ' . $e->getMessage());
        }
    }
}

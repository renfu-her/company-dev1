<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiBaseUrl = config('setting.api_base_url', 'https://admin-filament.dev-vue.com/api/v1');
    }

    public function index()
    {
        $response = Http::get("{$this->apiBaseUrl}/post-categories/1/posts");
        $posts = $response->successful() ? ($response->json()['data']['posts'] ?? []) : [];

        return view('about.index', compact('posts'));
    }

    public function show($id)
    {

        $defaultId = $id;

        $response = Http::get("{$this->apiBaseUrl}/post-categories/1/posts");
        $posts = $response->successful() ? ($response->json()['data']['posts'] ?? []) : [];

        $response = Http::get("{$this->apiBaseUrl}/posts/{$id}");
        $post = $response->successful() ? ($response->json()['data'] ?? null) : null;

        return view('about', compact('post', 'posts', 'defaultId'));
    }
}

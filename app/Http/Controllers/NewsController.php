<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiBaseUrl = config('setting.api_base_url', 'https://admin-filament.dev-vue.com/api/v1');
    }

    public function index()
    {
        $response = Http::get("{$this->apiBaseUrl}/news");
        $news = $response->successful() ? ($response->json()['data'] ?? []) : [];

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $response = Http::get("{$this->apiBaseUrl}/news/{$id}");
        $news = $response->successful() ? ($response->json()['data'] ?? null) : null;

        return view('news.show', compact('news'));
    }
} 
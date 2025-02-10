<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CooperationController extends Controller
{
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiBaseUrl = config('setting.api_base_url', 'https://admin-filament.dev-vue.com/api/v1');
    }

    public function index()
    {
        $response = Http::get("{$this->apiBaseUrl}/post-categories/4/posts");
        $cooperations = $response->successful() ? ($response->json()['data']['posts'] ?? []) : [];

        return view('cooperation.index', compact('cooperations'));
    }

    public function show($id)
    {
        $response = Http::get("{$this->apiBaseUrl}/post-categories/4/posts");
        $posts = $response->successful() ? ($response->json()['data']['posts'] ?? []) : [];
        
        $cooperation = collect($posts)->firstWhere('id', $id);

        return view('cooperation.show', compact('cooperation'));
    }
} 
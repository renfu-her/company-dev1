<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompetitionController extends Controller
{
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiBaseUrl = config('setting.api_base_url', 'https://admin-filament.dev-vue.com/api/v1');
    }

    public function index()
    {
        $response = Http::get("{$this->apiBaseUrl}/post-categories/3/posts");
        $competitions = $response->successful() ? ($response->json()['data']['posts'] ?? []) : [];

        return view('competitions.index', compact('competitions'));
    }

    public function show($id)
    {
        $response = Http::get("{$this->apiBaseUrl}/post-categories/3/posts");
        $posts = $response->successful() ? ($response->json()['data']['posts'] ?? []) : [];
        
        $competition = collect($posts)->firstWhere('id', $id);

        return view('competitions.show', compact('competition'));
    }
} 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumController extends Controller
{
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiBaseUrl = config('setting.api_base_url', 'https://admin-filament.dev-vue.com/api/v1');
    }

    public function index()
    {
        $response = Http::get("{$this->apiBaseUrl}/albums");
        $albums = $response->successful() ? ($response->json()['data'] ?? []) : [];

        return view('albums.index', compact('albums'));
    }

    public function show($id)
    {
        $response = Http::get("{$this->apiBaseUrl}/albums/{$id}");
        $album = $response->successful() ? ($response->json()['data'] ?? null) : null;

        return view('albums.show', compact('album'));
    }
}

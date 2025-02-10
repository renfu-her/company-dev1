<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiBaseUrl = config('setting.api_base_url', 'https://admin-filament.dev-vue.com/api/v1');
    }

    public function index()
    {
        $response = Http::get("{$this->apiBaseUrl}/courses");
        $courses = $response->successful() ? ($response->json()['data'] ?? []) : [];

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $response = Http::get("{$this->apiBaseUrl}/courses/{$id}");
        $course = $response->successful() ? ($response->json()['data'] ?? null) : null;

        return view('courses.show', compact('course'));
    }
} 
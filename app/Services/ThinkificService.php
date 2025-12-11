<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ThinkificService
{
    protected $apiKey;
    protected $subdomain;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.thinkific.api_key');
        $this->subdomain = config('services.thinkific.subdomain');
        $this->baseUrl = "https://api.thinkific.com/api/public/v1/";
    }

    /**
     * Get all users from Thinkific
     */
    public function getUsers()
    {
        $response = Http::withHeaders([
            'X-Auth-API-Key' => $this->apiKey,
            'X-Auth-Subdomain' => $this->subdomain
        ])->get($this->baseUrl . "users");

        return $response->json()['items'] ?? [];
    }

    /**
     * Get all courses from Thinkific
     */
    public function getCourses()
    {
        $response = Http::withHeaders([
            'X-Auth-API-Key' => $this->apiKey,
            'X-Auth-Subdomain' => $this->subdomain
        ])->get($this->baseUrl . "courses");

        return $response->json()['items'] ?? [];
    }

    /**
     * Get all enrollments from Thinkific
     */
    public function getEnrollments()
    {
        $response = Http::withHeaders([
            'X-Auth-API-Key' => $this->apiKey,
            'X-Auth-Subdomain' => $this->subdomain
        ])->get($this->baseUrl . "enrollments");

        return $response->json()['items'] ?? [];
    }

    /**
     * Get lessons by course ID
     */
    public function getLessons($courseId)
    {
        $response = Http::withHeaders([
            'X-Auth-API-Key' => $this->apiKey,
            'X-Auth-Subdomain' => $this->subdomain
        ])->get($this->baseUrl . "courses/{$courseId}/chapters");

        return $response->json()['items'] ?? [];
    }
}

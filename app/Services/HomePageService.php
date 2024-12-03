<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class HomePageService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('apiservice.api.base_url');
    }

    /**
     * @throws \Exception
     */
    public function getData($endpoint, $params = [], $category = null): string|JsonResponse
    {

        if ($category === null) {
            $response = Http::get($this->baseUrl . $endpoint, $params);
            if ($response->successful()) {
                return $response->body();
            }
            throw new \Exception('Failed to fetch data from API: ' . $response->status());

        } else {
            $params ['category'] = $category;
            $response = Http::get($this->baseUrl . $endpoint, $params);
            if ($response->successful()) {
                return $response->body();
            }
            throw new \Exception('Failed to fetch data from API: ' . $response->status());
        }

    }

    public function createNewQuestion($endpoint, $data): string|JsonResponse
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, $data);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function changeQuestionStatus($endpoint)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

}

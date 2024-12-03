<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class StatisticService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('apiservice.api.base_url');
    }

    public function getStatistics($endpoint, $params = []): string|JsonResponse
    {
        $response = Http::get($this->baseUrl . $endpoint, $params);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }
}

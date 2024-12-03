<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SingleQuestionService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('apiservice.api.base_url');
    }

    /**
     * @throws \Exception
     */
    public function getData($endpoint, $params = []): string|JsonResponse
    {
        $response = Http::get($this->baseUrl . $endpoint, $params);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    /**
     * @param $endpoint
     * @param $data
     * @return string|JsonResponse
     * @throws \Exception
     */
    public function createComment($endpoint, $data): string|JsonResponse
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'commentable_id' => $data['commentable_id'],
            'commentable_type' => $data['commentable_type'],
            'content' => $data['content'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function deleteComment($endpoint)
    {
        $response = Http::delete($this->baseUrl . $endpoint);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function updateComment($endpoint, $data)
    {
        $response = Http::post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'status' => $data['status'],
            'content' => $data['content'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function getSpecificComment($endpoint)
    {
        $response = Http::get($this->baseUrl . $endpoint);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function likeComment($endpoint, $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'vote_type' => $data['vote_type'],
            'vote_model' => $data['vote_model'],
            'vote_id' => $data['vote_id'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function createAnswer($endpoint, $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'question_id' => $data['question_id'],
            'content' => $data['content'],
            'is_accepted' => $data['is_accepted'],
            'is_correct_answer' => $data['is_correct'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function deleteAnswer($endpoint)
    {
        $response = Http::delete($this->baseUrl . $endpoint);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function getSpecificAnswer($endpoint)
    {
        $response = Http::get($this->baseUrl . $endpoint);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function updateAnswer($endpoint, $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'question_id' => $data['question_id'],
            'content' => $data['content'],
            'is_accepted' => $data['is_accepted'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function likeAnswer($endpoint, $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'vote_type' => $data['vote_type'],
            'vote_model' => $data['vote_model'],
            'vote_id' => $data['vote_id'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function disLikeAnswer($endpoint, $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'vote_type' => $data['vote_type'],
            'vote_model' => $data['vote_model'],
            'vote_id' => $data['vote_id'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function changeAnswerStatus($endpoint)
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

    public function likeQuestion($endpoint, $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'vote_type' => $data['vote_type'],
            'vote_model' => $data['vote_model'],
            'vote_id' => $data['vote_id'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function disLikeQuestion($endpoint, $data)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . $endpoint, [
            'user_id' => $data['user_id'],
            'vote_type' => $data['vote_type'],
            'vote_model' => $data['vote_model'],
            'vote_id' => $data['vote_id'],
        ]);
        if ($response->successful()) {
            return $response->body();
        }
        throw new \Exception('Failed to fetch data from API: ' . $response->status());
    }

    public function pinQuestion($endpoint)
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

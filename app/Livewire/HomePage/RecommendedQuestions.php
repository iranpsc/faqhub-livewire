<?php

namespace App\Livewire\HomePage;

use App\Services\RecommendedQuestionsService;
use Livewire\Component;

class RecommendedQuestions extends Component
{
    public $questions;
    protected $apiService;

    public function __construct()
    {
        $this->apiService = app(RecommendedQuestionsService::class);
    }

    public function mount()
    {
        try {
            $this->questions = json_decode($this->apiService->getQuestions('most-liked-questions'), true);
        } catch (\Exception $exception) {
            $this->addError('api_error', $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.home-page.recommended-questions', [
            'questions' => $this->questions
        ]);
    }
}

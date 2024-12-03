<?php

namespace App\Livewire\HomePage;

use App\Services\MostLikedQuestionService;
use Livewire\Component;

class MostLikedQuestions extends Component
{
    public $questions;
    protected $apiService;

    public function __construct()
    {
        $this->apiService = app(MostLikedQuestionService::class);
    }

    public function mount()
    {
        try {
            $this->questions = json_decode($this->apiService->getQuestions('most-view-questions'), true);
        } catch (\Exception $exception) {
            $this->addError('api_error', $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.home-page.most-liked-questions');
    }
}

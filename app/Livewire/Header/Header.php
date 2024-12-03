<?php

namespace App\Livewire\Header;

use App\Enum\LevelEnum;
use App\Enum\QuestionPinStatus;
use App\Enum\QuestionStatus;
use App\Services\HomePageService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Header extends Component
{
    public $title;

    public $content;

    public $category;

    public $categories;

    protected $baseUrl;

    public $query = '';

    public $questions = [];

    public function __construct()
    {
        $this->apiService = app(HomePageService::class);
    }

    public function mount()
    {
        $this->baseUrl = config('apiservice.api.base_url');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->get($this->baseUrl . 'categories');
        $this->categories = json_decode($response->body())->data;
    }

    public function render()
    {
        return view('livewire.header.header');
    }

    public function createNewQuestion()
    {

        if (Auth::check()) {
            $data = [
                'title' => $this->title,
                'content' => $this->content,
                'category_id' => $this->category,
                'user_id' => Auth::id(),
                'is_pinned' => QuestionPinStatus::UNPINNED->value,
                'status' => QuestionStatus::UNPUBLISHED->value,
            ];
            try {
                $this->apiService->createNewQuestion('questions/question/create', $data);
                $this->content = '';
                $this->title = '';
                $this->category = '';
            } catch (\Exception $exception) {
                $this->addError('api_error', $exception->getMessage());
            }
        } else {
            $this->redirectRoute('login');
        }
    }


    public function searchQuestions()
    {
        $this->baseUrl = config('apiservice.api.base_url');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->get($this->baseUrl . 'questions/search', [
            'search' => $this->query,
        ]);
        if ($response->successful()) {
            $this->questions = json_decode($response->body());
        } else {
            $this->questions = [];
        }
    }


}

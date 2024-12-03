<?php

namespace App\Livewire\HomePage;

use App\Services\StatisticService;
use Livewire\Component;

class Statistics extends Component
{
    public $statistics;
    protected $apiService;

    public function __construct()
    {
        $this->apiService = app(StatisticService::class);
    }

    public function mount()
    {
        try {
            $this->statistics = json_decode($this->apiService->getStatistics('get-statistics'), true);
        } catch (\Exception $exception) {
            $this->addError('api_error', $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.home-page.statistics',[
            'statistics' => $this->statistics
        ]);
    }
}

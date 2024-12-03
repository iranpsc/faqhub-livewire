<?php

namespace App\Livewire\HomePage;

use App\Services\ActiveUsesService;
use Livewire\Component;

class ActiveUsers extends Component
{
    public $usersData;
    protected $apiService;

    public function __construct()
    {
        $this->apiService = app(ActiveUsesService::class);
    }

    public function mount()
    {
        try {
            $this->usersData = json_decode($this->apiService->getData('get-active-users'), true);
        } catch (\Exception $exception) {
            $this->addError('api_error', $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.home-page.active-users',[
            'activeUsers' => $this->usersData
        ]);
    }
}

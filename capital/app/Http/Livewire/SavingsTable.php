<?php

namespace App\Http\Livewire;

use App\Models\Savings;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SavingsTable extends Component
{
    use WithPagination;
    public $sortBy = 'subscription_date';
    public $sortDirection = 'asc';
    public $perPage = 5;
    public $searchTerm = '';
    public function render()
    {
        $users = User::all();
        $savings = Savings::query()
            ->search($this->searchTerm)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->with(['user', 'subscriptionType'])->paginate($this->perPage);
        return view('livewire.savings-table', [
            'users' => $users,
            'savings' => $savings
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection == 'desc';
        } else {
            $this->sortDirection == 'asc';
        }
        return $this->sortBy = $field;
    }
}

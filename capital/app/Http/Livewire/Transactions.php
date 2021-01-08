<?php

namespace App\Http\Livewire;

use App\Models\Transactions as ModelsTransactions;
use Livewire\Component;
use Livewire\WithPagination;

class Transactions extends Component
{
    use WithPagination;
    public function render()
    {
        $transactions = ModelsTransactions::where('user_id', auth()->user()->id)->paginate(10);
        return view(
            'livewire.transactions',
            [
                'transactions' => $transactions,
            ]
        );
    }
}

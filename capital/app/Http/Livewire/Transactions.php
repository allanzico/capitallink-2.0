<?php

namespace App\Http\Livewire;

use App\Models\Transactions as ModelsTransactions;
use Livewire\Component;
use Livewire\WithPagination;

class Transactions extends Component
{
    use WithPagination;

    public $active;
    public $searchText;
    public $sortBy = 'id';
    public $sortAsc = true;
    public $confirmingTransactionDeletion = false;
    protected $queryString = [
        'active' => ['except' => false],
        'searchText' => ['except' => ''],
        'sortBy' => ['except' => 'id'],
        'sortAsc' => ['except' => true]

    ];
    public function render()
    {
        $transactions = ModelsTransactions::where('user_id', auth()->user()->id)
            ->when($this->searchText, function ($query) {
                return $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->searchText . '%')
                        ->orWhere('amount', 'like', '%' . $this->searchText . '%');
                });
            })
            ->when($this->active, function ($query) {
                return $query->active();
            })->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC');

        $query = $transactions->toSql();
        $transactions = $transactions->paginate(10);

        return view(
            'livewire.transactions',
            [
                'transactions' => $transactions,
                'query' => $query
            ]
        );
    }

    public function sortBy($field)
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function confirmTransactionDeletion($id)
    {
        $this->confirmingTransactionDeletion = $id;
    }

    public function deleteTransaction(ModelsTransactions $transaction)
    {
        $transaction->delete();
        $this->confirmingTransactionDeletion = false;
    }
    public function updatingActive()
    {
        $this->resetPage();
    }

    public function updatingsearchText()
    {
        $this->resetPage();
    }
}

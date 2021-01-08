<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="mt-8 text-2xl">
        Transactions
    </div>
    {{ $query }}
    <div class="mt-6">
        <div class="flex justify-between">
            <div >
                <input wire:model.debounce.500ms="searchText" type="search" placeholder="search" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mr-2">
                <input  type="checkbox" class="mr-2 leading-tight" wire:model="active">Active Only?
            </div>
        </div>
        <table class="table-auto w-full">
                <thead>
                    <th class="px-4 py-2">
                        <div class="flex items-center">
                            <button wire:click="sortBy('id')">ID</button>
                           <x-sort-icon sortField="id" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                        </div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">
                            <button wire:click="sortBy('name')">Name</button>
                            <x-sort-icon sortField="name" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                        </div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">
                            <button wire:click="sortBy('amount')">Amount</button>
                            <x-sort-icon sortField="amount" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                        </div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Status</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Actions</div>
                    </th>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td class="border px-4 py-2">{{ $transaction->id }}</td>
                            <td class="border px-4 py-2">{{ $transaction->name }}</td>
                            <td class="border px-4 py-2">{{ number_format($transaction->amount, 2) }}</td>
                            <td class="border px-4 py-2">{{ $transaction->status ? 'Active' : 'Not-Active' }}</td>
                            <td class="border px-4 py-2">Edit
                                <x-jet-danger-button wire:click="confirmTransactionDeletion({{ $transaction->id }})" wire:loading.attr="disabled">
                                    {{ __('Delete') }}
                                </x-jet-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $transactions->links() }}
    </div>

    <!-- Delete Transaction Confirmation Modal -->
    <x-jet-dialog-modal wire:model="confirmingTransactionDeletion">
        <x-slot name="title">
            {{ __('Delete Transaction') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this transaction? ') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('confirmingTransactionDeletion', false)" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteTransaction({{ $confirmingTransactionDeletion }})" wire:loading.attr="disabled">
                {{ __('Delete Transaction') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>


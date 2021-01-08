<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="mt-8 text-2xl">
        Transactions
    </div>
    <div class="mt-6">
        <table class="table-auto w-full">
                <thead>
                    <th class="px-4 py-2">
                        <div class="flex items-center">ID</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Name</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Amount</div>
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
                            <td class="border px-4 py-2">Edit/Delete</td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $transactions->links() }}
    </div>
</div>


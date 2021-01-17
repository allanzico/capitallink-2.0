<div class="flex flex-col mt-8">
    <div class="flex items-start justify-between pb-6 ">

        {{-- sort actions --}}
       <div class="flex flex-wrap ">
        <div class="col-span-6 sm:col-span-3 mx-2">
            <label for="search" class="block text-sm font-medium text-gray-700">Search:</label>
            <div class="pt-0 relative mx-auto text-gray-600">
                <input wire:model.debounce.300ms="searchTerm" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  type="search" name="search" placeholder="Search . . .">
                <button type="submit" class="absolute right-0 -top-2 mt-5 mr-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
              </div>
        </div>
        <div class="col-span-4 sm:col-span-3 mx-2">
            <label for="perpage" class="block text-sm font-medium text-gray-700">Per page</label>
            <select wire:model="perPage" class="mt-1 block w-full py-2 px-4 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>5</option>
              <option>10</option>
              <option>20</option>
              <option>50</option>
              <option>100</option>
            </select>
        </div>
       </div>
       {{-- export actions --}}
       <div class="flex flex-wrap">
        <div class="col-span-4 sm:col-span-3 mx-2">

             <div class="pt-5">
                <a href="#">
                    <button class="hover:bg-green-200 hover:text-green-800 group flex items-center rounded-md bg-green-100 text-green-600 text-sm font-medium px-4 py-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span class="mx-1 font-bold">
                            PDF
                        </span>
                    </button>
                 </a>

              </div>
        </div>
       </div>

    </div>
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 w-full">
                <thead>
                <tr>
                    <th wire:click="sortBy('subscription_date')" scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <div class="flex items-center">
                            Date
                            @include('partials._sort-icon',['field'=>'subscription_date'])
                        </div>

                    </th>
                    <th wire:click="sortBy('amount')" scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <div class="flex items-center">
                            Amount
                            @include('partials._sort-icon',['field'=>'amount'])
                        </div>

                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Saved By
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Saved For
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>

                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($savings as $saving)

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $saving->subscription_date }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $saving->amount }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $saving->user->name}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $saving->subscriptionType->name }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button>
                                    <a href="#" class="text-gray-600 hover:text-gray-900 mb-2 mr-2">
                                        <button>
                                            <svg height="20" width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                        </button>
                                    </a>
                                </button>

                            @can('edit-savings')

                                <a href="{{ route('savings.edit', $saving->id) }}" class="text-gray-600 hover:text-gray-900 mb-2 mr-2">
                                <button>
                                    <svg height="20" width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                </a>
                            @endcan
                            @can('edit-savings')
                                <form class="inline-block" action="{{ route('savings.destroy', $saving) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    {{ method_field("DELETE") }}
                                        <button class="text-red-600 hover:text-red-900 mb-2 mr-2">
                                            <svg height="20" width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                </form>
                            @endcan

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-4">
        {{ $savings->links() }}
    </div>
</div>

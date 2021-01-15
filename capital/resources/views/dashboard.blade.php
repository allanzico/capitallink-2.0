<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <main class="flex-1 overflow-x-hidden overflow-y-auto ">
                    <div class="container mx-auto px-6 py-8">
                        <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">

                        @can('edit-savings')
                        <div class="space-x-2">
                            <a href="{{ route('savings.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            <span>
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </span>
                            <span>Add New Transaction</span>
                          </a>

                          </div>
                        @endcan
                      </div>
                            <div class="mt-4">
                                    <div class="flex flex-wrap -mx-6">
                                        <div class="w-full px-6 sm:w-1/2 xl:w-1/3 mb-5">
                                            <div class="border flex items-center px-5 py-6 rounded-md bg-white">
                                                <div class="p-3 rounded-full border">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                                </div>

                                                <div class="mx-5">
                                                    <div class="text-gray-500 text-sm uppercase tracking-widest font-semibold">Members</div>
                                                    <h4 class="text-2xl font-semibold text-gray-700">{{ count($users) }}</h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full px-6 sm:w-1/2 xl:w-1/3 mb-5">
                                            <div class="border flex items-center px-5 py-6 rounded-md bg-white">
                                                <div class="p-3 rounded-full border">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                </div>

                                                <div class="mx-5">
                                                    <div class="text-gray-500 text-sm uppercase tracking-widest font-semibold">Members</div>
                                                    <h4 class="text-2xl font-semibold text-gray-700">{{ count($users) }}</h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full px-6 sm:w-1/2 xl:w-1/3 mb-5">
                                            <div class="border flex items-center px-5 py-6 rounded-md bg-white">
                                                <div class="p-3 rounded-full border">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                                </div>

                                                <div class="mx-5">
                                                    <div class="text-gray-500 text-sm uppercase tracking-widest font-semibold">Members</div>
                                                    <h4 class="text-2xl font-semibold text-gray-700">{{ count($users) }}</h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-5 flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                                </div>
                                <div class="flex flex-col mt-8">
                                    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                                <thead>
                                                <tr>
                                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Amount
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
                        </main>

                    </div>
                </main>
            </div>

    </div>
</x-app-layout>

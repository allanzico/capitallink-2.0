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
                            <a href="{{ route('savings.create') }}">
                            <button class="hover:bg-blue-200 hover:text-blue-800 group flex items-center rounded-md bg-blue-100 text-blue-600 text-sm font-medium px-4 py-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="mx-1 font-bold uppercase">
                                    New Transaction
                                </span>
                            </button>
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
                                                    {{-- <h4 class="text-2xl font-semibold text-gray-700">{{ count($users) }}</h4> --}}
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
                                                    {{-- <h4 class="text-2xl font-semibold text-gray-700">{{ count($users) }}</h4> --}}

                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full px-6 sm:w-1/2 xl:w-1/3 mb-5">
                                            <div class="border flex items-center px-5 py-6 rounded-md bg-white">
                                                <div class="p-3 rounded-full border">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                                </div>

                                                <div class="mx-5">
                                                    <div class="text-gray-500 text-sm uppercase tracking-widest font-semibold">Cash at hand</div>
                                                    {{-- <h4 class="text-2xl font-semibold text-gray-700">{{ count($users) }}</h4> --}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-5 flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">

                                </div>

                                    {{-- Datatable --}}
                                    <livewire:savings-table/>

                        </main>

                    </div>
                </main>
            </div>

    </div>
</x-app-layout>

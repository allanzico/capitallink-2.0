<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add new subscription
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-2 sm:px-6 lg:px-8">


<!-- component -->
    <div class="bg-white-200 min-h-screen font-mono my-5">
        <div class="container mx-auto">

            <div>
                <div class="mt-10 sm:mt-0">

                    <div class="mt-5 md:mt-0 md:col-span-2">
                      <form action="{{ route('savings.store') }}" method="POST">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                          <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                              <div class="col-span-6 sm:col-span-4">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date <span style="color:#ff0000">*</span></label>
                                <input type="date" name="subscriptionDate" id="date" autocomplete="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>

                              <div class="col-span-6 sm:col-span-4">
                                  <label for="amount" class="block text-sm font-medium text-gray-700">Amount <span style="color:#ff0000">*</span></label>
                                  <input type="text" name="subscriptionAmount" id="amount" autocomplete="amount" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="enter amount">
                              </div>

                              <div class="col-span-6 sm:col-span-3">
                                <label for="savedBy" class="block text-sm font-medium text-gray-700">Saved By <span style="color:#ff0000">*</span></label>
                                <select id="savedBy" name="savedBy" autocomplete="savedBy" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <div class="w-full items-center flex">
                                        @foreach ($users as $user)
                                        <option class="mx-2 -mt-1  " value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </div>
                                </select>
                              </div>
                              <div class="col-span-6 sm:col-span-3">
                                  <label for="subscriptionType" class="block text-sm font-medium text-gray-700">Subscription Type <span style="color:#ff0000">*</span></label>
                                  <select id="subscriptionType" name="subscriptionType" autocomplete="subscriptionType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($subscriptions as $subscription)
                                    <option value="{{ $subscription->id }}">{{ $subscription->name }}</option>
                                    @endforeach
                                  </select>
                              </div>


                              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                  <label for="extraNotes" class="block text-sm font-medium text-gray-700">
                                      Extra Notes
                                    </label>
                                    <div class="mt-1">
                                      <textarea id="extraNotes" name="extraNotes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        <span style="color:#ff0000">*</span> Required fields
                                    </p>
                              </div>

                            </div>

                          </div>

                          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Save Transaction
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

        </div>
    </div>

        </div>
    </div>
</x-app-layout>

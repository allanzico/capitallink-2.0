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
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Details</h2>
                <form method="POST" action="{{ route('savings.store') }}" class="mt-6 border-t border-gray-400 pt-4">
                    @csrf
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Date</label>
                            <input type="date" name="subscriptionDate" class='appearance-none block w-1/4 bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Amount</label>
                            <input name="subscriptionAmount" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter amount in UGX'  required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Saved By</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select name="savedBy" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <div class="w-full items-center flex">
                                        @foreach ($users as $user)
                                        <option class="mx-2 -mt-1  " value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </div>
                          </select>
                            </div>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Subscription type</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select name="subscriptionType" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                   @foreach ($subscriptions as $subscription)
                                   <option value="{{ $subscription->id }}">{{ $subscription->name }}</option>
                                   @endforeach
                                </select>


                            </div>
                        </div>
                        <div class="personal w-full border-t border-gray-400 pt-4">

                            <div class='w-full md:w-full px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Extra Notes</label>
                                <textarea name="extraNotes" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit">Add Savings</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                {{-- <form method="post" action="{{ route('savings.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('description', '') }}" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <input type="date">
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form> --}}

        </div>
    </div>
</x-app-layout>

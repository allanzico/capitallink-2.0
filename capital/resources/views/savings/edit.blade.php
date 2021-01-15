<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Savings
        </h2>
    </x-slot>

    <div>
        <div class="bg-white-200 min-h-screen font-mono my-5">
            <div class="container mx-auto">
                <div class="inputs w-full max-w-2xl p-6 mx-auto">
                    <h2 class="text-2xl text-gray-900">Details</h2>
                    <form method="POST" action="{{ route('savings.update', $saving) }}" class="mt-6 border-t border-gray-400 pt-4">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            <div class='w-full md:w-full px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Date</label>
                                <input value="{{ $saving->subscription_date }}" type="date" name="subscriptionDate" class='appearance-none block w-1/4 bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' required>
                            </div>
                            <div class='w-full md:w-full px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Amount</label>
                                <input value="{{ $saving->amount }}" name="subscriptionAmount" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter amount in UGX'  required>
                            </div>
                            <div class='w-full md:w-full px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Saved By</label>
                                <div class="flex-shrink w-full inline-block relative">
                                    <select name="savedBy" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                        {{-- @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach --}}
                                    </select>

                                </div>
                            </div>
                            <div class='w-full md:w-full px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Subscription type</label>
                                <div class="flex-shrink w-full inline-block relative">
                                    <select name="subscriptionType" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                       {{-- @foreach ($subscriptions as $subscription)
                                       <option value="{{ $subscription->id }}">{{ $subscription->name }}</option>
                                       @endforeach --}}
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
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User {{ $user->name }}
        </h2>
    </x-slot>

    <div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <main class="flex-1 overflow-x-hidden overflow-y-auto ">
            <div class="container mx-auto px-6 py-8">
            <div>
              <div class="mt-10 sm:mt-0">
                  <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="POST" action="{{ route('users.update', $user) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                          <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-4">
                              <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                              <input value="{{$user->name }}" type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              @error('name')
                              <p class="text-sm text-red-600">{{ $message }}</p>
                          @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                <input value="{{$user->email}}" type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            </div>
                          </div>
                               <fieldset class="mt-5">
                                <legend class="text-base text-gray-900 uppercase font-semibold leading-loose">Roles</legend>
                                @foreach ($roles as $role)
                                <div class="mt-2 space-y-4">
                                  <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                      <input id="roles" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                      name="roles[]" value="{{ $role->id }}"
                                      @if ($user->roles->pluck('id')->contains($role->id))
                                      checked
                                      @endif
                                      >
                                    </div>
                                    <div class="ml-3 text-sm">
                                      <label for="comments" class="font-medium text-gray-700">{{ $role->name }}</label>
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                              </fieldset>
                            </div>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Update user
                            </button>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </main>
            </div>
    </div>
</x-app-layout>

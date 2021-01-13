<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User {{ $user->name }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('users.update', $user) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{$user->name }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{$user->email}}" />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                        @foreach ($roles as $role)
                        <div class="flex flex-col">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="roles[]" value="{{ $role->id }}"
                                @if ($user->roles->pluck('id')->contains($role->id))
                                  checked
                                @endif
                                ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                            </label>

                        </div>
                        @endforeach
                    <button type="submit" class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

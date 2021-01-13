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
                        @foreach ($roles as $role)
                        <div class="flex flex-col">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="roles[]" value="{{ $role->id }}"><span class="ml-2 text-gray-700">{{ $role->name }}</span>
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

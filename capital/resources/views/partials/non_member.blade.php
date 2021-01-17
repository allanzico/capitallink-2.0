<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="max-w-4xl px-10 my-4 py-6 bg-white rounded-lg shadow-md">
                <div class="flex justify-between items-center">
                    <span class="font-light text-gray-600">{{ date('d-M-Y H:i') }}</span>
                    </div>
                <div class="mt-2">
                    <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">Welcome to Capital Link</a>
                    <p class="mt-2 text-gray-600">You are not authorized to view the application! Please contact the administrator to make you a member of this organization</p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <a class="text-blue-600 hover:underline" href="{{ route('home') }}"><< Back home</a>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

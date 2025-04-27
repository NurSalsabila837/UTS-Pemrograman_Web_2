<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-xl font-semibold text-gray-700 text-center">{{ __('Apakah Anda yakin ingin keluar?') }}</h1>

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <div class="flex justify-center">
                <x-primary-button class="bg-red-600 hover:bg-red-500 focus:bg-red-500 active:bg-red-700">
                    {{ __('Keluar') }}
                </x-primary-button>
            </div>
        </form>

        <div class="flex justify-center mt-4">
            <a href="{{ url()->previous() }}" class="text-sm text-gray-600 hover:text-gray-900">
                {{ __('Kembali') }}
            </a>
        </div>
    </div>
</x-guest-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="{{ asset('/images/suisei.gif') }}" class="img-fluid ml-auto mr-auto w-auto text-gray-700" alt="Nakiri Ayame">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

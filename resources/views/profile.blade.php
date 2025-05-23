<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-2xl text-blue-800 dark:text-blue-300 leading-tight">
                {{ __('Profile') }}
            </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @livewire('profile-forms')
        </div>
    </div>
</x-app-layout>

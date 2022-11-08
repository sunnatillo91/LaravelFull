@extends('layouts.main')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div>
            {{ $name }}
        </div>
        <div>
            {{-- @empty($records)
                record bo'm bo'sh
            @endempty --}}
            {{-- @if (count($records) === 1)
                I have one record!
            @elseif (count($records) > 1)
                I have multiple records!
            @else I don't have any records!
            @endif --}}
            <div>
                <x-alert type='bu alert tipi' alert />
            </div>
            <div>
                <x-forms.button class="alert">
                    Saqlash
                </x-forms.button>
            </div>

            @include('for')
        </div>
    </div>
@endsection

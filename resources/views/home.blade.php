@extends('layouts.app')

@section('content')
    <div class="bg-gray-300 text-sm flex items-center">
        <div class="h-full flex flex-wrap justify-center px-4 xl:px-24">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Welcome
                </div>

                <div class="w-full p-6">
                    <div>
                        <h2 class="text-gray-700 text-xl font-semibold">
                            <!-- {{ Auth::user()->firstname }} &nbsp;{{ Auth::user()->surname }} -->
                            {{ $user->firstname }} {{ $user->surname }}
                        </h2>
                    </div>
                    <p class="text-gray-700 pt-3">
                        You are logged in!
                    </p>
                    <div class="pt-6">
                        <img src="{{ $img['secure_url'] }}" alt="Uploaded Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

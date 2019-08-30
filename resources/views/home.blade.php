@extends('layouts.app')

@section('content')
    <div class="mx-auto bg-gray-300 text-sm flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md mb-8">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Welcome {{ $user->firstname }}
                </div>

                <div class="w-full p-6 text-center items-center">
                    <p class="text-gray-700 pt-3 text-left">
                        You uploaded the following details:
                    </p>
                    <div class="pt-6 flex-wrap text-center items-center mx-auto">
                        <img src="{{ $img['secure_url'] }}" alt="Uploaded Image" class="items-center rounded-lg flex-wrap mx-auto">
                    </div>

                    <div class="pt-4">
                        <h2 class="text-gray-700 text-xl font-semibold">
                            {{ $user->firstname }} {{ $user->surname }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

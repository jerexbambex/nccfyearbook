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
                        <img src="{{ $img['secure_url'] }}" alt="Uploaded Image" class="items-center rounded-lg flex-wrap shadow-md mx-auto">
                    </div>

                    <div class="pt-4">
                        <h2 class="text-gray-700 text-xl font-semibold">
                            <!-- {{ $user->firstname }} {{ $user->surname }} -->
                        </h2>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Full Name:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->firstname }} {{ $user->middlename }} {{ $user->surname }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Date of Birth:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->birthdate }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Phone No:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->phone_number }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Institution attended:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->school_attended }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Course studied:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->course_studied }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">DatePost in NCCF:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->post_held }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">State of Origin:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->state_of_origin }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Favourite Quote:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->quote }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Facebook Name:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->facebook_name }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Hobbies:</div>
                        <div class="flex-wrap text-left pl-2">{{ $user->hobbies }}</div>
                    </div>

                    <div class="flex pt-4 text-left py-2 items-center">
                        <div class="flex-wrap w-1/3 font-semibold text-right">Email Address:</div>
                        <div class="flex-wrap text-left pl-2 text-blue-700">{{ $user->email }}</div>
                    </div>

                    <p class="text-left pt-3 text-red-600">Please check back in 2 days to make any update. Thanks.</p>

                </div>
            </div>
        </div>
    </div>

@endsection

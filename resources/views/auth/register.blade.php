@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-gray-300">
        <div class="flex flex-wrap justify-center">
            <div class="w-96 max-w-sm  bg-blue-900 rounded-lg shadow-xl">
                <div class="flex flex-col break-words rounded shadow-md">

                    <div class="text-gray-700 py-3 px-6 mb-0">
                        <h1 class="text-white pt-3">Create a new account</h1>
                    </div>

                    <form class="w-full p-6 pt-8" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="relative flex flex-wrap mb-6">
                            <label for="surname" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                Surname:
                            </label>

                            <input id="surname" type="text" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('name') ? ' border-red-500' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus placeholder="Your Surname">

                            @if ($errors->has('surname'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('surname') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                E-Mail Address:
                            </label>

                            <input id="email" type="email" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" required placeholder="your@email.com">

                            @if ($errors->has('email'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                Password:
                            </label>

                            <input id="password" type="password" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                Confirm Password:
                            </label>

                            <input id="password-confirm" type="password" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700" name="password_confirmation" required placeholder="Confirm Password">
                        </div>

                        <div class="">
                            <button type="submit" class="w-full uppercase inline-block align-middle text-center select-none whitespace-no-wrap py-3 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                                Register
                            </button>

                            <p class="w-full text-xs text-center text-gray-500 mt-8 -mb-4">
                                Already have an account?
                                <a class="text-blue-100 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                    Login
                                </a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

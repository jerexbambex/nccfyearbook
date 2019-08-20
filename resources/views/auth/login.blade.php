@extends('layouts.app')

@section('content')
    <div class="mx-auto bg-gray-300">
        <div class="h-full flex flex-wrap justify-center">
            <div class="w-96 bg-blue-900 rounded-lg shadow-xl">
                <div class="flex flex-col break-words rounded shadow-md ">

                    <div class="font-semibold text-gray-700 py-3 px-6 mb-0">
                        <!-- {{ __('Login') }} -->
                        <img class="justify-center fill-content text-white w-16" src="assets/img/nccfpic.png">
                        <h1 class="text-white text-3xl pt-8">Welcome back</h1>
                        <h2 class="text-blue-300">Enter your credentials below</h2>
                    </div>

                    <form class="w-full p-6 pt-8" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="relative flex flex-wrap mb-6">
                            <label for="email" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                E-mail
                            </label>

                            <input id="email" type="email" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}"  autofocus placeholder="your@email.com">

                            @if ($errors->has('email'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                Password
                            </label>

                            <input id="password" type="password" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('password') ? ' border-red-500' : '' }}" name="password"  placeholder="Password">

                            @if ($errors->has('password'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex mb-6">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-sm text-white ml-3" for="remember">
                                Remember Me
                            </label>
                        </div>
                        <div>
                            <button type="submit" class="w-full uppercase bg-blue-500 hover:bg-blue-700 text-gray-100 py-3 px-4 rounded focus:outline-none focus:shadow-outline text-center">
                                Login
                            </button>
                        </div>

                        <div class="items-center pt-2">


                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-200 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <p class="w-full text-xs text-center text-gray-500 mt-8 -mb-4">
                                    Don't have an account?
                                    <a class="text-blue-100 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                                        Register
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

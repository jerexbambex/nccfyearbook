@extends('layouts.app')

@section('content')
    <div class="mx-auto bg-gray-300 text-sm">

        <div class="h-full flex flex-wrap justify-center px-4 xl:px-24">
             <div class="text-center w-full justify-center">
                <div class="justify-center text-center">
                    <img class="flex-wrap mx-auto w-16" src="assets/img/nccfpic.png">
                </div>
                <h2 class="uppercase flex-wrap text-lg font-semibold pt-3 justify-center text-gray-700">Nigerian Christian Corpers' Fellowship</h2>
                <h3 class="uppercase flex-wrap text-lg pt-1 justify-center mb-8 text-gray-700">Imo State Chapter</h3>
            </div>
            <div class="w-full xl:w-3/4 bg-blue-900 rounded-lg shadow-xl mb-8">
                <div class="flex flex-col break-words rounded shadow-md">

                    <div class="text-gray-700 py-3 px-6 mb-0">
                        <h2 class="text-white pt-3 text-xl">Create a new account</h2>
                        <h2 class="text-blue-300 pt-2">Enter your credentials below as you want it to appear in the yearbook</h2>
                    </div>

                    <form class="w-full p-6 pt-8" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="md:flex md:flex-around mx-auto">
                            <div class="relative flex flex-wrap mb-6 md:w-1/3 md:flex-around">
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

                            <div class="relative flex flex-wrap mb-6 md:w-1/3 md:flex-around md:ml-2">
                                <label for="middlename" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Middlename:
                                </label>

                                <input id="middlename" type="text" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('name') ? ' border-red-500' : '' }}" name="middlename" value="{{ old('middlename') }}" required  placeholder="Your middlename">

                                @if ($errors->has('middlename'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('middlename') }}
                                    </p>
                                @endif
                            </div>

                            <div class="relative flex flex-wrap mb-6 md:w-1/3 md:flex-around md:ml-2">
                                <label for="firstname" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Firstname:
                                </label>

                                <input id="firstname" type="text" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('name') ? ' border-red-500' : '' }}" name="firstname" value="{{ old('firstname') }}" required  placeholder="Your firstname">

                                @if ($errors->has('firstname'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('firstname') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <hr class="py-3 text-blue-300 sm:hidden">

                        <div class="md:flex md:flex-around mx-auto">
                            <div class="relative flex flex-wrap mb-6 md:w-1/3 md:flex-around">
                                <label for="state_of_origin" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    State of Origin:
                                </label>

                                <input id="state_of_origin" type="text" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('name') ? ' border-red-500' : '' }}" name="state_of_origin" value="{{ old('state_of_origin') }}" required placeholder="Your state of origin">

                                @if ($errors->has('state_of_origin'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('state_of_origin') }}
                                    </p>
                                @endif
                            </div>

                            <div class="relative flex flex-wrap mb-6 md:w-1/3 md:flex-around md:ml-2">
                                <label for="school_attended" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Institution attended:
                                </label>

                                <input id="school_attended" type="text" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('name') ? ' border-red-500' : '' }}" name="school_attended" value="{{ old('school_attended') }}" required placeholder="Institution Attended">

                                @if ($errors->has('school_attended'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('school_attended') }}
                                    </p>
                                @endif
                            </div>

                            <div class="relative flex flex-wrap mb-6 md:w-1/3 md:flex-around md:ml-2">
                                <label for="course_studied" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Course studied:
                                </label>

                                <input id="course_studied" type="text" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('name') ? ' border-red-500' : '' }}" name="course_studied" value="{{ old('course_studied') }}" required placeholder="Your course studied">

                                @if ($errors->has('course_studied'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('course_studied') }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="md:flex md:flex-around mx-auto">
                            <div class="flex flex-wrap mb-6 md:w-1/2 lg:flex-around">
                                <label for="post_held" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Post held in NCCF:
                                </label>

                                <input id="post_held" type="text" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('post_held') ? ' border-red-500' : '' }}" name="post_held" required placeholder="Put NONE if no post">

                                @if ($errors->has('post_held'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('post_held') }}
                                    </p>
                                @endif
                            </div>

                            <div class="flex flex-wrap mb-6 md:w-1/2 lg:flex-around md:ml-2">
                                <label for="phone_number" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Phone Number:
                                </label>

                                <input id="phone_number" type="text" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700" name="phone_number" required placeholder="08012345678">

                                 @if ($errors->has('phone_number'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('phone_number') }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="relative flex flex-wrap mb-6">
                            <label for="quote" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                Favorite Quote:
                            </label>

                            <textarea name="quote" id="quote" cols="30" rows="10" class="outline-none bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('name') ? ' border-red-500' : '' }}" name="quote" value="{{ old('quote') }}" required placeholder="Your quote"></textarea>

                            @if ($errors->has('quote'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('quote') }}
                                </p>
                            @endif
                        </div>

                        <div class="md:flex md:flex-around mx-auto">
                            <div class="flex flex-wrap mb-6 md:w-1/2 lg:flex-around">
                                <label for="facebook_name" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Facebook Name:
                                </label>

                                <input id="facebook_name" type="text" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700{{ $errors->has('facebook_name') ? ' border-red-500' : '' }}" name="facebook_name" required placeholder="Your facebook name">

                                @if ($errors->has('facebook_name'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('facebook_name') }}
                                    </p>
                                @endif
                            </div>

                            <div class="flex flex-wrap mb-6 md:w-1/2 lg:flex-around md:ml-2">
                                <label for="hobbies" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Hobbies:
                                </label>

                                <input id="hobbies" type="text" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700" name="hobbies" required placeholder="Your Hobbies">

                                 @if ($errors->has('hobbies'))
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $errors->first('hobbies') }}
                                    </p>
                                @endif
                            </div>
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

                        <div class="md:flex md:flex-around mx-auto">
                            <div class="flex flex-wrap mb-6 md:w-1/2 lg:flex-around">
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

                            <div class="flex flex-wrap mb-6 md:w-1/2 lg:flex-around md:ml-2">
                                <label for="quote" class="uppercase block text-blue-500 text-xs font-bold mb-2 absolute pl-3 pt-2">
                                    Confirm Password:
                                </label>

                                <input id="quote" type="password" class="bg-blue-800 p-3 pt-8 shadow appearance-none rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none focus:bg-blue-700" name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="flex w-full items-center justify-center bg-grey-lighter mb-8">
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-blue-700 text-gray-200 rounded-lg shadow-lg tracking-wide uppercase shadow cursor-pointer hover:text-white hover:bg-blue-400">Upload your Picture
                                <!-- <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg> -->
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input type='file' class="" name="image" />
                            </label>
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

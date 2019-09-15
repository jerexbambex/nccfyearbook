@extends('layouts.app')

@section('content')
	<div class="mx-auto bg-gray-300 text-sm flex items-center">
		<div class="container md:mx-auto">
			<div class="flex flex-col break-words bg-white border border px-8 py-8">
				<p class="text-gray-600">Welcome admin</p>
				<h2 class="text-2xl text-blue-500 pt-3">We have {{ $users->count() }} registered users</h2>

				<!-- Display Users ard -->
				<div class="sm:flex sm:mx-2 sm:overflow-x-auto sm:pb-8 pt-8 py-8">
					@foreach($users as $user)
						<div class="sm:max-w-xs sm:w-full sm:flex-shrink-0 rounded overflow-hidden shadow-lg sm:px-2">
							<img class=" h-48 w-full object-cover" src="{{ $user->image() }}" alt="Sunset in the mountains">
							<div class="px-6 py-4">
								<div class="font-bold text-sm mb-2">
									{{ $user->firstname }} {{ $user->surname }}
								</div>
								<div class="text-gray-600 text-base text-xs">
								{{ $user->email }}
								</div>
								<div class="text-gray-600 text-base text-xs pt-3">
								{{ $user->phone_number }}
								</div>
								<div class="text-gray-600 text-base text-xs pt-3">
									{{ $user->created_at->diffForHumans() }}
								</div>
							</div>
							<div class="px-6 py-4">
								<a href="{{ route('user.profile', ['id' => $user->id]) }}">
									<button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
										View
									</button>
								</a>
							</div>
						</div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
@endsection
@extends('layouts.app')

@section('content')
<section class="container mx-auto my-8">
    <h1 class="text-3xl font-bold text-right">{{ __('Login') }}</h1>
    <div class="flex">
        <div class="w-6/12 lg:w-9/12 p-2">
            <img src="{{ asset('images/cats/cat-login.jpg') }}" alt="">
        </div>
        <div class="w-6/12 lg:w-3/12 p-2">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-3 border-red-400 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="text-red-400">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-3 border-red-400 @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="text-red-400">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Login') }}
                        </button>


                        @if (Route::has('password.request'))
                            <br />
                            <a class="font-light" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <br />
                        <a class="font-light" href="{{ url('users/login/google') }}">使用 Google 登入</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

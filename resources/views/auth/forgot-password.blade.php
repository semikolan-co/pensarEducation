{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


@extends('layouts.app')
@section('content')
    



<div id="login">
    <div data-aos="fade-right" class="contentcontainer">
       <h3>Forgot Password</h3>
       <div class="logincontent">
          <form action="forgot.php" method="post">
             <h4>Enter your Username, Email or Phone Number</h4>
             <input class="input" name="username" type="text" placeholder="Username" required>
             <button class="button" name="submit">Get Reset Link</button><br>
             <!-- <a href="forgot.php">Get Reset Link</a> -->
          </form>
       </div>
    </div>
    <img data-aos="fade-left" src="img/illustration_login.jpg" class="illustration" alt="Home Illustration">
 </div>
 
 
 @endsection
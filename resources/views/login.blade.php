@extends('components.template')

@section('title', 'Login')

@section('header', 'Login Page')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Login</h2>

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Login
                </button>
            </div>

            <p class="mt-6 text-center text-gray-600">Don't have an account? 
                <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">Register</a>
            </p>
        </form>
    </div>
</div>
@endsection

@section('footer', 'ContactApp © 2024')

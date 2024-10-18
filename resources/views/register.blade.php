@extends('components.template')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Create Your Account</h2>
        
        <!-- Register Form -->
        <form action="{{ route('register.submit') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block mb-2 font-semibold">Full Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Enter your full name" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 font-semibold">Email Address</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-2 font-semibold">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Create a password" required>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block mb-2 font-semibold">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Confirm your password" required>
            </div>

            <!-- Register Button -->
            <div class="flex justify-center">
                <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">Sign Up</button>
            </div>
        </form>

        <!-- Already Have an Account? -->
        <p class="mt-6 text-center text-gray-600">Already have an account? 
            <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">Login</a>
        </p>
    </div>
</div>
@endsection

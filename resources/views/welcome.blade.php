@extends('components.template')

@section('title', 'Welcome to ContactApp')

@section('header', 'Welcome to ContactApp')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center bg-no-repeat py-20" style="background-image: url('{{ asset('images/hero-image.jpg') }}');">
        <!-- Overlay (Optional, to darken the background) -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Hero Content -->
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl font-bold text-white mb-4">Manage Your Contacts with Ease</h1>
            <p class="text-lg text-white mb-8">ContactApp helps you organize, store, and manage your contacts seamlessly.</p>
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 py-3 px-6 rounded-full font-semibold hover:bg-gray-300 transition duration-300">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">Our Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="bg-white p-8 shadow-lg rounded-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 mx-auto text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m7-7l-7 7 7 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Simple Interface</h3>
                    <p>Our app features a simple and intuitive interface for easy use.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 shadow-lg rounded-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 mx-auto text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Organized Contacts</h3>
                    <p>Manage your contacts efficiently with built-in organizational features.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 shadow-lg rounded-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 mx-auto text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h8m-5 4h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Fast Access</h3>
                    <p>Access your contacts quickly and securely from any device.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 shadow-lg rounded-lg">
                    <p class="mb-4">"ContactApp made managing my professional contacts so easy. I love the interface and simplicity!"</p>
                    <p class="font-semibold">- Sarah J.</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 shadow-lg rounded-lg">
                    <p class="mb-4">"I can't imagine going back to the old way of keeping track of contacts. ContactApp is a game changer!"</p>
                    <p class="font-semibold">- John D.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->

    <section class="relative bg-cover bg-center bg-no-repeat py-20" style="background-image: url('{{ asset('images/hero-image.jpg') }}');">
        <!-- Overlay (Optional, to darken the background) -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- CTA Content -->
        <div class="container mx-auto text-center relative z-10">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Manage Your Contacts?</h2>
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 py-3 px-6 rounded-full font-semibold hover:bg-gray-300 transition duration-300">Get Started Now</a>
        </div>
    </section>

@endsection


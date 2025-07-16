@extends('layouts.app')

@section('content')
<div class="w-full max-w-md mx-auto mt-10">
    <div class="bg-[#0F172A] rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">
            Login
        </h2>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Email</label>
                <input name="email" type="email" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required autofocus>
            </div>

            <div class="mb-6">
                <label class="block text-gray-300 font-medium">Password</label>
                <input name="password" type="password" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <button class="w-full bg-[#2563EB] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
                Login
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-400">
            Don't have an account?<br>
            <a href="{{ route('register') }}" class="text-[#2563EB] font-semibold hover:underline">Register as Customer</a>
            <br>
            <a href="{{ route('register.seller') }}" class="text-[#2563EB] font-semibold hover:underline">Register as Seller</a>
        </div>
    </div>
</div>
@endsection

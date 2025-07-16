@extends('layouts.app')

@section('content')
<div class="w-full max-w-md mx-auto mt-10">
    <div class="bg-[#0F172A] rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">
            Customer Registration
        </h2>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Full Name</label>
                <input name="name" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Email</label>
                <input name="email" type="email" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Phone (+ Country Code)</label>
                <input name="phone" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Password</label>
                <input name="password" type="password" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-300 font-medium">Confirm Password</label>
                <input name="password_confirmation" type="password" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <button class="w-full bg-[#2563EB] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
                Register as Customer
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-400">
            Already have an account?<br>
            <a href="{{ route('login') }}" class="text-[#2563EB] font-semibold hover:underline">Login</a>
        </div>
    </div>
</div>
@endsection

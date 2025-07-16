@extends('layouts.seller')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-white">Profile Settings</h1>

    <form action="#" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block text-gray-300 font-medium">Company Name</label>
            <input type="text" name="company_name" value="Example Company" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-[#2563EB]">
        </div>

        <div>
            <label class="block text-gray-300 font-medium">Email</label>
            <input type="email" name="email" value="seller@example.com" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-[#2563EB]">
        </div>

        <div>
            <label class="block text-gray-300 font-medium">Phone (+ Country Code)</label>
            <input type="text" name="phone" value="+256700000000" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-[#2563EB]">
        </div>

        <hr class="border-gray-700">

        <div>
            <label class="block text-gray-300 font-medium">New Password</label>
            <input type="password" name="password" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-[#2563EB]">
        </div>

        <div>
            <label class="block text-gray-300 font-medium">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-[#2563EB]">
        </div>

        <button type="submit" class="w-full bg-[#2563EB] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
            Save Changes
        </button>
    </form>
</div>
@endsection

@extends('layouts.seller')

@section('content')
<div>
    <h1 class="text-3xl font-bold mb-6 text-white">Welcome to Your Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gray-800 p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-2">Total Sales</h2>
            <p class="text-2xl font-bold text-[#2563EB]">$12,500</p>
        </div>
        <div class="bg-gray-800 p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-2">Pending Orders</h2>
            <p class="text-2xl font-bold text-[#2563EB]">23</p>
        </div>
        <div class="bg-gray-800 p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-2">Products Listed</h2>
            <p class="text-2xl font-bold text-[#2563EB]">150</p>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Recent Orders</h2>
        <div class="bg-gray-800 p-4 rounded-lg">
            <p class="text-gray-400">You have 5 new orders to process.</p>
        </div>
    </div>
</div>
@endsection

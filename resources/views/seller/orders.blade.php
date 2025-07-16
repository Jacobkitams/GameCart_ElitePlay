@extends('layouts.seller')

@section('content')
<div>
    <h1 class="text-3xl font-bold mb-6 text-white">Orders</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-800 rounded-lg">
            <thead>
                <tr class="text-left text-gray-400 uppercase text-sm tracking-wider">
                    <th class="px-6 py-3">Order #</th>
                    <th class="px-6 py-3">Customer</th>
                    <th class="px-6 py-3">Date</th>
                    <th class="px-6 py-3">Total</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example order row -->
                <tr class="border-t border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">#ORD12345</td>
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">2024-07-21</td>
                    <td class="px-6 py-4">$150.00</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-yellow-500 text-xs rounded">Pending</span>
                    </td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="#" class="text-[#2563EB] hover:underline">View</a>
                        <a href="#" class="text-green-500 hover:underline">Mark as Shipped</a>
                        <a href="#" class="text-red-500 hover:underline">Cancel</a>
                    </td>
                </tr>
                <tr class="border-t border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">#ORD12346</td>
                    <td class="px-6 py-4">Alice Smith</td>
                    <td class="px-6 py-4">2024-07-20</td>
                    <td class="px-6 py-4">$89.99</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-green-600 text-xs rounded">Shipped</span>
                    </td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="#" class="text-[#2563EB] hover:underline">View</a>
                        <a href="#" class="text-red-500 hover:underline">Cancel</a>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
@endsection

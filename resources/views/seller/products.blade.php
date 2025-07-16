@extends('layouts.seller')

@section('content')
<div>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-white">Manage Products</h1>
        <a href="#" class="bg-[#2563EB] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
            + Add New Product
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-800 rounded-lg">
            <thead>
                <tr class="text-left text-gray-400 uppercase text-sm tracking-wider">
                    <th class="px-6 py-3">Product</th>
                    <th class="px-6 py-3">Price</th>
                    <th class="px-6 py-3">Stock</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example product row -->
                <tr class="border-t border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">Gaming Mouse</td>
                    <td class="px-6 py-4">$49.99</td>
                    <td class="px-6 py-4">120</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-green-600 text-xs rounded">Active</span>
                    </td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="#" class="text-[#2563EB] hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
                <tr class="border-t border-gray-700 hover:bg-gray-700">
                    <td class="px-6 py-4">Mechanical Keyboard</td>
                    <td class="px-6 py-4">$89.00</td>
                    <td class="px-6 py-4">60</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-yellow-500 text-xs rounded">Low Stock</span>
                    </td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="#" class="text-[#2563EB] hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
@endsection

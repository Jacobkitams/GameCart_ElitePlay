<div class="p-6 text-xl font-bold text-white">
    Seller Panel
</div>
<nav class="mt-6">
    <a href="{{ url('/seller/dashboard') }}" class="block px-6 py-3 hover:bg-gray-800 {{ request()->is('seller/dashboard') ? 'bg-gray-800' : '' }}">
        Dashboard
    </a>
    <a href="{{ url('/seller/products') }}" class="block px-6 py-3 hover:bg-gray-800 {{ request()->is('seller/products') ? 'bg-gray-800' : '' }}">
        Manage Products
    </a>
    <a href="{{ url('/seller/orders') }}" class="block px-6 py-3 hover:bg-gray-800 {{ request()->is('seller/orders') ? 'bg-gray-800' : '' }}">
        Orders
    </a>
    <a href="{{ url('/seller/profile') }}" class="block px-6 py-3 hover:bg-gray-800 {{ request()->is('seller/profile') ? 'bg-gray-800' : '' }}">
        Profile Settings
    </a>
</nav>

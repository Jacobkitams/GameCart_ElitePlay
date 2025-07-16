<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0F172A] text-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar include -->
        <aside class="w-64 bg-gray-900 flex-shrink-0 hidden md:block">
            @include('seller.seller_sidebar')
        </aside>

        <!-- Mobile header (optional) -->
        <div class="md:hidden p-4 bg-gray-900 flex justify-between items-center">
            <div class="text-xl font-bold">Seller Panel</div>
            <!-- Here you can add a burger menu for mobile if you want -->
        </div>

        <!-- Main content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>

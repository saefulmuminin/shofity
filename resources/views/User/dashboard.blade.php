<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white w-full max-w-md p-8 rounded-lg shadow text-center">

    <h1 class="text-2xl font-bold text-gray-800 mb-3">
        Selamat Datang, {{ auth()->user()->name }} 👋
    </h1>

    <p class="text-gray-600 mb-6">
        Anda berhasil login ke sistem.
    </p>

<a href="{{ route('user.addresses.index') }}" class="block p-6 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
    🏠 My Addresses
</a>

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button
            type="submit"
            class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-md transition"
        >
            Logout
        </button>
    </form>

</div>

</body>
</html>

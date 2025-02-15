<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Perpustakaan Admin') }}</title>
    @vite('resources/css/app.css') <!-- Pastikan Anda sudah menggunakan Tailwind CSS dengan Vite -->
</head>
<body class="bg-gray-100">

    <!-- Sidebar and Content -->
    <div class="flex">

        <!-- Sidebar -->
        <div class="w-72 bg-gray-800 text-white p-3 h-screen fixed">
            <h3 class="text-2xl font-bold mb-6">Admin Perpustakaan</h3>
            <ul>
                <!-- Dashboard Link -->
                <li class="mb-4">
                    <a href="{{ route('dashboard') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('dashboard') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Dashboard
                    </a>
                </li>

                <!-- Manajemen Rak -->
                <li class="mb-4">
                    <a href="{{ route('raks.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('raks.*') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Rak
                    </a>
                </li>

                <!-- Manajemen Ddc -->
                <li class="mb-4">
                    <a href="{{ route('ddc.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('ddc.*') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen DDC
                    </a>
                </li>

                <!-- Manajemen Format -->
                <li class="mb-4">
                    <a href="{{ route('format.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('format.index') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Format
                    </a>
                </li>

                <!-- Manajemen Penerbit -->
                <li class="mb-4">
                    <a href="{{ route('penerbit.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('penerbit.index') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Penerbit
                    </a>
                </li>

                <!-- Manajemen Pengarang -->
                <li class="mb-4">
                    <a href="{{ route('pengarang.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('pengarang.index') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Pengarang
                    </a>
                </li>

                <!-- Manajemen Jenis Anggota -->
                <li class="mb-4">
                    <a href="{{ route('jenis_anggota.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('jenis_anggota.index') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Jenis Anggota
                    </a>
                </li>

                <!-- Manajemen Pustaka -->
                <li class="mb-4">
                    <a href="{{ route('pustaka.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('pustaka.index') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Pustaka
                    </a>
                </li>

                <!-- Manajemen Anggota -->
                <li class="mb-4">
                    <a href="{{ route('anggota.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('anggota.index') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Anggota
                    </a>
                </li>

                <!-- Manajemen Transaksi -->
                <li class="mb-4">
                    <a href="{{ route('transaksi.index') }}" 
                        class="text-lg text-white hover:text-blue-300 px-4 py-2 rounded-md 
                        {{ request()->routeIs('transaksi.index') ? 'bg-blue-600' : 'hover:bg-blue-500' }}">
                        Manajemen Transaksi
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-72 p-6">
            <!-- Header Section -->
            {{-- <div class="bg-white shadow-md p-4 mb-6 rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    - 
                </h2>
            </div> --}}

            <!-- Content Section -->
            <div class="bg-white p-6 shadow-md rounded-lg">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>

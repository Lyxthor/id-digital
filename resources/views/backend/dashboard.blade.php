@extends('layouts.dashboard')
@prepend('styles')
    <style>
        /* Custom Color */
        .bg-custom-blue {
            background-color: #124868;
        }

        .text-custom-blue {
            color: #124868;
        }
    </style>
@endprepend
@section('content')
    <!-- Main Content -->
    <main class="flex-1 bg-gray-50 p-8">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-xl font-semibold">Selamat Datang di DIGIID</h1>
            <nav>
                <a href="#" class="text-custom-blue">Beranda</a> /
                <span class="text-gray-500">Dashboard</span>
            </nav>
        </header>

        <!-- Statistik -->
        <div class="grid grid-cols-3 gap-6 mb-8">
            <!-- Total Penduduk -->
            <div class="bg-white shadow rounded-lg p-4 flex items-center">
                <div class="text-custom-blue text-4xl font-bold">120</div>
                <div class="ml-4">
                    <p class="text-gray-500">Total Penduduk</p>
                </div>
            </div>
            <!-- RT -->
            <div class="bg-white shadow rounded-lg p-4 flex items-center">
                <div class="text-custom-blue text-4xl font-bold">60</div>
                <div class="ml-4">
                    <p class="text-gray-500">RT</p>
                </div>
            </div>
            <!-- RW -->
            <div class="bg-white shadow rounded-lg p-4 flex items-center">
                <div class="text-custom-blue text-4xl font-bold">60</div>
                <div class="ml-4">
                    <p class="text-gray-500">RW</p>
                </div>
            </div>
        </div>
    </main>
@endsection

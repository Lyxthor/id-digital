@extends('layouts.admin')

@section('title', 'Register')
@section('content')
    <div class="bg-gray-100 h-screen flex items-center justify-center">
        <div class="flex w-full max-w-4xl shadow-lg rounded-lg overflow-hidden">
            <!-- Bagian Kiri -->
            <div class="w-1/2 bg-white flex flex-col items-center justify-center p-8">
                <img src="{{ asset('images/DIGIID 2.png') }}" alt="Logo" class="w-full h-auto mb-4">
                <h1 class="text-2xl font-bold">DIGIID</h1>
                <p class="text-gray-600 mt-2">Digital Identitas Indonesia</p>
            </div>

            <!-- Bagian Kanan -->
            <div class="w-1/2 bg-[#124868] text-white p-8 flex flex-col justify-center">
                <form action="#" method="POST">
                    <!-- Full Name Input -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-200">Masukan Nama</label>
                        <input id="name" name="name" type="text" required
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            style="background-color: #B0BAC3;" placeholder="Masukan Nama Lengkap">
                    </div>
                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-200">Masukan Password</label>
                        <input id="password" name="password" type="password" required
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            style="background-color: #B0BAC3;" placeholder="Masukan password">
                    </div>
                    <!-- Input Email -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-200">Masukan Email</label>
                        <input id="password" name="password" type="password" required
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            style="background-color: #B0BAC3;" placeholder="Masukan password">
                    </div>
                    <!-- Input Nomor Telepon -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-200">Masukan Nomor Telepon</label>
                        <input id="password" name="password" type="password" required
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            style="background-color: #B0BAC3;" placeholder="Masukan password">
                    </div>
                    <!-- Tombol Lanjutkan -->
                    <button onclick="window.location.href='./dashboard.html';" type="button"
                        class="w-full bg-teal-500 text-white p-3 rounded hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-400">
                        Lanjutkan
                    </button>

                </form>
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-200">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-teal-400 hover:underline">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

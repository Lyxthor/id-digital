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
<main class="flex-grow bg-gray-50 p-8 overflow-y-auto"> 
    <header class="mb-6">
      <h1 class="text-xl font-semibold">Tambah Master Penduduk</h1>
    </header>
    <hr class="border-black mb-6">
    <section class="bg-white shadow rounded-lg p-6">
      <h2 class="text-lg font-semibold mb-4">Tambah Data Master Penduduk</h2>
      <form id="penduduk-form">
        <div class="mb-4">
          <label for="first-name" class="block text-sm font-medium">First Name</label>
          <input type="text" id="first-name" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your first name" required>
        </div>
        <div class="mb-4">
          <label for="last-name" class="block text-sm font-medium">Last Name</label>
          <input type="text" id="last-name" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your last name" required>
        </div>
        <div class="mb-4">
          <label for="nik" class="block text-sm font-medium">NIK</label>
          <input type="file" id="nik" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
          <label for="kk" class="block text-sm font-medium">NO KK</label>
          <input type="file" id="kk" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
          <label for="ktp" class="block text-sm font-medium">KTP</label>
          <input type="file" id="ktp" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium">Deskripsi</label>
          <textarea id="description" rows="3" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukan Keterangan" required></textarea>
        </div>
        <div class="flex justify-end space-x-2">
          <button type="reset" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Reset</button>
          <button type="submit" class="px-4 py-2 bg-[#124868] text-white rounded hover:bg-blue-600">Submit</button>
        </div>
      </form>
    </section>
  </main>
@endsection
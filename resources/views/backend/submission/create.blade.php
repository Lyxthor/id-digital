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
            <h1 class="text-xl font-semibold">Input Submission</h1>
            <nav>
            <a href="#" class="text-custom-blue">Submission</a> /
            <span class="text-gray-500">Input Submission</span>
            </nav>
        </header>

        <!-- Form Section -->
        <div class="bg-gray-200 shadow rounded-lg p-8">
          <form id="penduduk-form" class="grid grid-cols-2 gap-6">
            <div>
              <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
              <input id="judul" type="text" placeholder="Input judul" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2" required>
            </div>
            <div>
              <label for="region" class="block text-sm font-medium text-gray-700">Region Tujuan</label>
              <select id="region" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2" required>
                <option value="" disabled selected>Region Tujuan</option>
                <option value="RT">RT</option>
                <option value="RW">RW</option>
                <option value="Penduduk">Penduduk</option>
              </select>
            </div>

            <div class="col-span-2">
              <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
              <textarea id="deskripsi" placeholder="Deskripsi" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2" rows="3" required></textarea>
            </div>
            <div>
              <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
              <input id="deadline" type="date" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2" required>
            </div>
            <div>
                <label for="tipe_dokumen" class="block text-sm font-medium text-gray-700">Tipe Dokumen</label>
                <select id="tipe_dokumen" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2" required>
                  <option value="" disabled selected>Pilih Tipe Dokumen</option>
                  <option value="akta_kelahiran">Akta Kelahiran</option>
                  <option value="kk">Kartu Keluarga</option>
                  <option value="tkp">TKP</option>
                </select>
              </div>
            <div class="col-span-2">
              <button type="submit" class="w-full bg-[#124868] text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Submit
              </button>
            </div>
          </form>
        </div>
      </main>
@endsection

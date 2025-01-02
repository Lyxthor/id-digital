@extends('layouts.admin')
@section('content')
<div div id="sidebar" class="fixed z-10 inset-y-0 left-0 bg-[#124868] w-64 shadow-lg transform -translate-x-full transition-transform duration-300">
    <div class="p-6">
      <h2 class="text-lg font-bold mb-4 text-white">Menu</h2>
      <ul class="space-y-4">
        <li>
          <a href="./dashboard.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="5 12 3 12 12 3 21 12 19 12" />
              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
             <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./upDokumen.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="16 16 12 12 8 16" />  <line x1="12" y1="12" x2="12" y2="21" />  <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3" />  <polyline points="16 16 12 12 8 16" /></svg>             <span class="flex-1 ms-3 whitespace-nowrap">Submission</span>
          </a>
        </li>
        <li>
          <a href="./dokumen.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />  <polyline points="14 2 14 8 20 8" />  <line x1="16" y1="13" x2="8" y2="13" />  <line x1="16" y1="17" x2="8" y2="17" />  <polyline points="10 9 9 9 8 9" /></svg>
             <span class="flex-1 ms-3 whitespace-nowrap">Dokumen</span>
          </a>
        </li>
        <li>
          <a href="./request.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="6" cy="18" r="2" />  <circle cx="6" cy="6" r="2" />  <circle cx="18" cy="18" r="2" />  <line x1="6" y1="8" x2="6" y2="16" />  <path d="M11 6h5a2 2 0 0 1 2 2v8" />  <polyline points="14 9 11 6 14 3" /></svg>
             <span class="flex-1 ms-3 whitespace-nowrap">Request</span>
          </a>
        </li>
        <li>
          <a href="./status.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="5" width="18" height="14" rx="2" />  <polyline points="3 7 12 13 21 7" /></svg>
             <span class="flex-1 ms-3 whitespace-nowrap">Status</span>
          </a>
        </li>
        <li>
          <a href="./profil.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
             <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
          </a>
        </li>
        <li>
          <a href="./login.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
              <path d="M7 12h14l-3 -3m0 6l3 -3" />
            </svg>
             <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- overlay -->
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-10 hidden" onclick="toggleSidebar()"></div>


  <!-- Header -->
  <div class="bg-[#19456B] text-white rounded-b-3xl p-6 flex items-center">
    <!-- Back Arrow -->
    <button class="mr-4">
      <a href="./dashboard.html">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
    </a>
    </button>
    <!-- Title -->
    <h1 class="text-xl font-bold">Update Data</h1>
  </div>

  <!-- Form -->
  <main id="mainContent" class="p-6 space-y-6 transition-all duration-300">
  <div class="p-6 space-y-6">
    <h2 class="text-lg font-semibold text-gray-800">Data Diri</h2>

    <!-- Nama -->
    <div>
      <label for="nama" class="block text-sm font-medium text-gray-700">
        Nama <span class="text-red-500">*</span>
      </label>
      <input type="text" id="nama" name="nama" placeholder="Enter Username"
        class="mt-1 w-full border border-blue-500 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
    </div>

    <!-- NIK -->
    <div>
      <label for="nik" class="block text-sm font-medium text-gray-700">
        NIK <span class="text-red-500">*</span>
      </label>
      <input type="file" id="nik" name="nik"
        class="mt-1 w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-md file:border-gray-300 file:bg-blue-50 file:text-blue-600 cursor-pointer">
    </div>

    <!-- KTP -->
    <div>
      <label for="ktp" class="block text-sm font-medium text-gray-700">
        KTP <span class="text-red-500">*</span>
      </label>
      <input type="file" id="ktp" name="ktp"
        class="mt-1 w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-md file:border-gray-300 file:bg-blue-50 file:text-blue-600 cursor-pointer">
    </div>

    <!-- Akta Kelahiran -->
    <div>
      <label for="akta" class="block text-sm font-medium text-gray-700">
        Akta Kelahiran <span class="text-red-500">*</span>
      </label>
      <input type="file" id="akta" name="akta"
        class="mt-1 w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-md file:border-gray-300 file:bg-blue-50 file:text-blue-600 cursor-pointer">
    </div>

    <!-- Submit Button -->
    <div>
      <button type="submit"
        class="w-full bg-[#19456B] text-white py-2 rounded-md hover:bg-[#12344F] focus:outline-none focus:ring-2 focus:ring-[#19456B]"
        onclick="showUpdateSuccess()">
        Update
      </button>
    </div>
    </main>

    <!-- Pop-up -->
<div
id="popup"
class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-6 w-80 hidden">
<div class="flex flex-col items-center">
  <!-- Icon -->
  <svg class="h-12 w-12 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
  </svg>
  <!-- Judul -->
  <h1 class="text-xl font-semibold text-gray-800 mb-2">SUKSES!</h1>
  <!-- Pesan -->
  <p class="text-gray-600 text-center">Dokumen berhasil diupload</p>
  <!-- Tombol Tutup -->
  <button
    class="mt-4 bg-[#124868] text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none"
    onclick="hidePopup()">
    Tutup
  </button>
</div>
    </div>

    <script>
      // Fungsi untuk menampilkan pop-up pemberitahuan
      function showUpdateSuccess() {
        const modal = document.getElementById("updateSuccessModal");
        modal.classList.remove("hidden");
      }

      // Fungsi untuk menutup pop-up
      function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.add("hidden");
      }
      function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
      const mainContent = document.getElementById('mainContent');

      const isSidebarVisible = !sidebar.classList.contains('-translate-x-full');

      sidebar.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');

      // Adjust main content margin
      if (isSidebarVisible) {
        mainContent.style.marginLeft = '0';
      } else {
        mainContent.style.marginLeft = '16rem'; // Match sidebar width
      }
    }
    </script>

@endsection

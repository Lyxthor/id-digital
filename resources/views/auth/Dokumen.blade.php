@extends('layouts.admin')
@section('content')
<div id="sidebar" class="fixed z-10 inset-y-0 left-0 bg-[#124868] w-64 shadow-lg transform -translate-x-full transition-transform duration-300 lg:translate-x-0">
    <div class="p-6">
      <h2 class="text-lg font-bold mb-4 text-white">Menu</h2>
      <ul class="space-y-4">
        <li>
          <a href="./dashboard.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="5 12 3 12 12 3 21 12 19 12" />
              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./upDokumen.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="16 16 12 12 8 16" />
              <line x1="12" y1="12" x2="12" y2="21" />
              <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3" />
              <polyline points="16 16 12 12 8 16" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Submission</span>
          </a>
        </li>
        <li>
          <a href="./dokumen.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
              <polyline points="14 2 14 8 20 8" />
              <line x1="16" y1="13" x2="8" y2="13" />
              <line x1="16" y1="17" x2="8" y2="17" />
              <polyline points="10 9 9 9 8 9" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Dokumen</span>
          </a>
        </li>
        <li>
          <a href="./request.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z"/>
              <circle cx="6" cy="18" r="2" />
              <circle cx="6" cy="6" r="2" />
              <circle cx="18" cy="18" r="2" />
              <line x1="6" y1="8" x2="6" y2="16" />
              <path d="M11 6h5a2 2 0 0 1 2 2v8" />
              <polyline points="14 9 11 6 14 3" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Request</span>
          </a>
        </li>
        <li>
          <a href="./status.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="h-8 w-8 text-gray-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z"/>
              <rect x="3" y="5" width="18" height="14" rx="2" />
              <polyline points="3 7 12 13 21 7" />
            </svg>
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
  <header class="bg-[#19456B] text-white rounded-b-3xl p-6 flex items-center justify-between">
    <!-- Hamburger Icon -->
    <button onclick="toggleSidebar()" class="mr-4">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
    <!-- Title -->
    <h1 class="text-xl font-bold">Hai, Rindi Fadilah</h1>
  </header>

  <!-- Content -->
  <main id="mainContent" class="p-6 space-y-6 transition-all duration-300">
    <div class="px-6 py-4 flex-grow">
      <!-- User Section -->
      <div class="flex items-center space-x-3 mb-4">
        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
          <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-8 0v2"></path>
          </svg>
        </div>
        <span class="text-lg font-medium">Rindi</span>
      </div>

      <!-- Bagian Document Grid -->
      <div class="grid grid-cols-3 gap-4 size-auto">
        <!-- KTP -->
        <div class="flex flex-col items-center size-full">
          <img src="https://1.bp.blogspot.com/-0_alFR0_Xfg/XLT-8mT0uUI/AAAAAAAAAHE/IZ9Qx70u4fok6pVAsXy2l563WuyArz7rwCLcBGAs/s1600/KTP-1544523262.png"
               alt="KTP"
               class="w-80 h-80 object-contain rounded-md shadow-md bg-gray-100">
          <span class="mt-2 text-sm text-gray-600">KTP</span>
        </div>
        <!-- Kartu Keluarga -->
        <div class="flex flex-col items-center">
          <img src="https://asset-2.tstatic.net/bangka/foto/bank/images/20220312_ilustrasi-kartu-keluarga.jpg"
               alt="Kartu Keluarga"
               class="w-80 h-80 object-contain rounded-md shadow-md bg-gray-100">
          <span class="mt-2 text-sm text-gray-600">Kartu Keluarga</span>
        </div>
        <!-- Akte Kelahiran -->
        <div class="flex flex-col items-center">
          <img src="https://ngulungkulon-munjungan.trenggalekkab.go.id/assets/files/artikel/sedang_1536662707IMG_20180911_173613.jpg"
               alt="Akte Kelahiran"
               class="w-80 h-80 object-contain rounded-md shadow-md bg-gray-100">
          <span class="mt-2 text-sm text-gray-600">Akte Kelahiran</span>
        </div>
      </div>
    </div>
  </main>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
      const mainContent = document.getElementById('mainContent');

      sidebar.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');

      // Adjust main content margin
      if (sidebar.classList.contains('-translate-x-full')) {
        mainContent.style.marginLeft = '0';
      } else {
        mainContent.style.marginLeft = '16rem'; // Match sidebar width
      }
    }
  </script>
@endsection

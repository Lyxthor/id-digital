@extends('layouts.admin')
@section('content')

<div id="sidebar" class="fixed z-10 inset-y-0 left-0 bg-[#124868] w-64 shadow-lg transform -translate-x-full transition-transform duration-300">
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
  <div id="overlay" class="fixed inset-0 bg-opacity-10 bg-black hidden" onclick="toggleSidebar()"></div>

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

  <!-- Form -->
  <main id="mainContent" class="p-6 space-y-6 transition-all duration-300">
  <div class="p-6 space-y-6">
    <h2 class="text-lg font-semibold text-gray-800">Dokumen Yang Diminta</h2>
    <!-- Checklist Dokumen -->
    <div id="checklist-dokumen" class="bg-white shadow-sm rounded-lg p-4">
      <div class="grid grid-cols-2 gap-4 border-b border-gray-200 pb-2">
        <div class="text-sm font-semibold text-gray-600">Nama Anggota</div>
        <div class="text-sm font-semibold text-gray-600 text-right">Action</div>
      </div>
      <div class="mt-2 space-y-4">
        <ul class="space-y-2">
            <li class="flex justify-between items-center">
              <span>Kartu Keluarga (KK)</span>
              <svg onclick="openModal('kkModal')" class="h-8 w-8 text-gray-400 cursor-pointer" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                <line x1="16" y1="5" x2="19" y2="8" />
              </svg>
            </li>
          </li>
          <li class="flex justify-between items-center">
            <span>Kartu Tanda Penduduk (KTP)</span>
            <svg onclick="openModal('ktpModal')" class="h-8 w-8 text-gray-400 cursor-pointer" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
              <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
              <line x1="16" y1="5" x2="19" y2="8" />
            </svg>
          </li>
          <li class="flex justify-between items-center">
            <span>Akta Kelahiran</span>
            <svg onclick="openModal('akteModal')" class="h-8 w-8 text-gray-400 cursor-pointer" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
              <path d="M9 15h3l8.5 -8.5a1.5 1.0 0 0 0 -3 -3l-8.5 8.5v3" />
              <line x1="16" y1="5" x2="19" y2="8" />
            </svg>
          </li>
        </ul>
      </div>
    </div>

    <!-- Modal Pilih Aksi -->
    <div id="kkModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg w-96">
          <h2 class="text-lg font-semibold text-gray-800">Pilih Aksi</h2>
          <div class="mt-4">
            <!-- Dropdown -->
            <div class="relative">
              <select
                id="actionSelect"
                class="block w-full bg-white border border-gray-300 rounded-md shadow-sm px-3 py-2 text-gray-800 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="" disabled selected>Pilih aksi</option>
                <option value="perubahan">Perubahan</option>
                <option value="penambahan">Penambahan</option>
                <option value="penghapusan">Penghapusan</option>
              </select>
            </div>
          </div>
          <div class="mt-6 flex justify-end">
            <button type="button" class="px-4 py-2 bg-gray-300 rounded-md mr-2" onclick="closeModal('kkModal')">Cancel</button>
            <button type="button" class="px-4 py-2 bg-[#124868] text-white rounded-md hover:bg-blue-600" onclick="submitAction()">Submit</button>
          </div>
        </div>
      </div>

      <!-- Form Penambahan -->
      <div id="addForm" class="hidden mt-6 p-4 bg-white shadow-md rounded-lg w-full">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Form Penambahan</h3>
        <form id="newMemberForm">
          <div class="mb-4">
            <label for="nameInput" class="block text-gray-700 font-medium">Nama</label>
            <input type="text" id="nameInput" class="w-full border border-gray-300 rounded-md px-3 py-2" placeholder="Masukkan nama" required>
          </div>
          <div class="mb-4">
            <label for="nikInput" class="block text-gray-700 font-medium">NIK</label>
            <input type="text" id="nikInput" class="w-full border border-gray-300 rounded-md px-3 py-2" placeholder="Masukkan NIK" required>
          </div>
          <div class="flex justify-end">
            <button type="button" class="px-4 py-2 bg-gray-300 rounded-md mr-2" onclick="closeModal('addForm')">Batal</button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Simpan</button>
          </div>
        </form>
      </div>

      <!-- Tabel Data -->
      <div id="dataTable" class="mt-6 p-4 bg-white shadow-md rounded-lg hidden">
        <h3 id="tableTitle" class="text-lg font-semibold text-gray-800 mb-4">Daftar Anggota Keluarga</h3>
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gray-200">
              <th class="border border-gray-300 px-4 py-2 text-left font-medium text-gray-700">Nama</th>
              <th class="border border-gray-300 px-4 py-2 text-left font-medium text-gray-700">Status</th>
              <th class="border border-gray-300 px-4 py-2 text-left font-medium text-gray-700">Action</th>
            </tr>
          </thead>
          <tbody id="tableBody">
            <!-- Data dinamis akan ditambahkan di sini -->
          </tbody>
        </table>
      </main>
      </div>

      <script>
        function submitAction() {
          const selectedAction = document.getElementById("actionSelect").value;
          const dataTable = document.getElementById("dataTable");
          const addForm = document.getElementById("addForm");
          const tableBody = document.getElementById("tableBody");

          // Reset tampilan
          dataTable.classList.add("hidden");
          addForm.classList.add("hidden");

          if (selectedAction === "penambahan") {
            // Tampilkan form penambahan
            addForm.classList.remove("hidden");
          } else if (selectedAction === "penghapusan") {
            // Tampilkan tabel untuk penghapusan
            dataTable.classList.remove("hidden");
            renderTable("delete");
          } else if (selectedAction === "perubahan") {
            // Tampilkan tabel untuk perubahan (ikon edit)
            dataTable.classList.remove("hidden");
            renderTable("edit");
          }
        }

        function renderTable(actionType) {
          const tableBody = document.getElementById("tableBody");

          // Data contoh
          const data = [
            { name: "John Doe", status: "Aktif" },
            { name: "Jane Smith", status: "Nonaktif" },
          ];

          // Kosongkan tabel sebelum mengisi ulang
          tableBody.innerHTML = "";

          // Tambahkan data ke tabel
          data.forEach((item) => {
            const row = document.createElement("tr");

            // Kolom Nama
            const nameCell = document.createElement("td");
            nameCell.className = "border border-gray-300 px-4 py-2";
            nameCell.textContent = item.name;

            // Kolom Status
            const statusCell = document.createElement("td");
            statusCell.className = "border border-gray-300 px-4 py-2";
            statusCell.textContent = item.status;

            // Kolom Action
            const actionCell = document.createElement("td");
            actionCell.className = "border border-gray-300 px-4 py-2 flex justify-center items-center";

            if (actionType === "delete") {
              // Icon Delete
              actionCell.innerHTML = `
                <svg onclick="showConfirmModal('${item.name}')" class="h-8 w-8 text-gray-400 cursor-pointer hover:text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="18" y1="9" x2="12" y2="15" />
                  <line x1="12" y1="9" x2="18" y2="15" />
                </svg>`;
            } else if (actionType === "edit") {
              // Icon Edit
              actionCell.innerHTML = `
                <svg onclick="alert('Edit ${item.name}')" class="h-8 w-8 text-gray-400 cursor-pointer hover:text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                  <path d="M18.5 2.5l3 3" />
                  <path d="M15 6l6 6" />
                </svg>`;
            }

            // Tambahkan kolom ke baris
            row.appendChild(nameCell);
            row.appendChild(statusCell);
            row.appendChild(actionCell);

            // Tambahkan baris ke tabel
            tableBody.appendChild(row);
          });
        }

        function closeModal(modalId) {
          document.getElementById(modalId).classList.add("hidden");
        }

        document.getElementById("newMemberForm").addEventListener("submit", (event) => {
          event.preventDefault();
          const name = document.getElementById("nameInput").value;
          const nik = document.getElementById("nikInput").value;
          alert(`Data berhasil ditambahkan:\nNama: ${name}\nNIK: ${nik}`);
          closeModal("addForm");
        });
      </script>


  <!-- Modal for KTP-->
  <div id="ktpModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg w-96">
      <h2 class="text-lg font-semibold text-gray-800">Isi Data Diri Anda</h2>
      <form>
        <div class="mt-4">
          <label for="ktp-name" class="block text-sm text-gray-600">Nama</label>
          <input type="text" id="ktp-name" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Masukkan Nama Anda" />
        </div>
        <div class="mt-4">
          <label for="ktp-nik" class="block text-sm text-gray-600">NIK</label>
          <input type="text" id="ktp-nik" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Masukkan NIK" />
        </div>
        <div class="mt-4">
          <label for="ktp-address" class="block text-sm text-gray-600">Alamat</label>
          <input type="text" id="ktp-address" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Masukkan Alamat" />
        </div>

        <!-- Permissions Section -->
        <div class="mt-6">
          <p class="text-sm text-gray-600 font-semibold">Permissions</p>
          <div class="mt-2">
            <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox" />
              <span class="ml-2 text-sm text-gray-600">Perubahan</span>
            </label>
          </div>
          <div class="mt-2">
            <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox" />
              <span class="ml-2 text-sm text-gray-600">Penambahan</span>
            </label>
          </div>
          <div class="mt-2">
            <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox" />
              <span class="ml-2 text-sm text-gray-600">Penghapusan</span>
            </label>
          </div>
        </div>
        <!-- Buttons -->
        <div class="mt-6 flex justify-end">
            <button type="button" class="px-4 py-2 bg-gray-300 rounded-md mr-2" onclick="closeModal('ktpModal')">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-[#19456B] text-white rounded-md">Submit</button>
          </div>
        </form>
      </div>
    </div>

  <!-- Modal for Akte -->
  <div id="akteModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg w-96">
      <h2 class="text-lg font-semibold text-gray-800">Isi Data Diri Anda</h2>
      <form>
        <div class="mt-4">
          <label for="akte-name" class="block text-sm text-gray-600">Nama</label>
          <input type="text" id="akte-name" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Masukkan Nama Anda" />
        </div>
        <div class="mt-4">
          <label for="akte-nik" class="block text-sm text-gray-600">NIK</label>
          <input type="text" id="akte-nik" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Masukkan NIK" />
        </div>
        <div class="mt-4">
          <label for="akte-address" class="block text-sm text-gray-600">Alamat</label>
          <input type="text" id="akte-address" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Masukkan Alamat" />
        </div>

        <!-- Permissions Section -->
        <div class="mt-6">
          <p class="text-sm text-gray-600 font-semibold">Permissions</p>
          <div class="mt-2">
            <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox" />
              <span class="ml-2 text-sm text-gray-600">Perubahan</span>
            </label>
          </div>
          <div class="mt-2">
            <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox" />
              <span class="ml-2 text-sm text-gray-600">Penambahan</span>
            </label>
          </div>
          <div class="mt-2">
            <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox" />
              <span class="ml-2 text-sm text-gray-600">Penghapusan</span>
            </label>
          </div>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex justify-end">
          <button type="button" class="px-4 py-2 bg-gray-300 rounded-md mr-2" onclick="closeModal('akteModal')">Cancel</button>
          <button type="submit" class="px-4 py-2 bg-[#19456B] text-white rounded-md">Submit</button>
        </div>
      </form>
    </div>
  </div>
<!-- Submit Button -->
<!-- Modal Konfirmasi Update -->
<div id="updateModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg w-96">
      <h2 class="text-lg font-semibold text-gray-800">Berhasil</h2>
      <p class="mt-4 text-gray-700">Data berhasil diperbarui.</p>
      <div class="mt-6 flex justify-end">
        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" onclick="closeModal('updateModal')">OK</button>
      </div>
    </div>
  </div>

  <!-- Tombol Update -->
  <div class="flex items-center justify-center">
    <button type="button"
      class="w-96 content-center bg-[#19456B] text-white py-2 rounded-md hover:bg-[#12344F] focus:outline-none focus:ring-2 focus:ring-[#124868]"
      onclick="handleUpdate()">
      Update
    </button>
  </div>
  </main>

  <script>
    function handleUpdate() {
      // Lakukan proses update di sini (jika ada, misalnya update ke server)
      // Setelah proses selesai, tampilkan modal konfirmasi update
      document.getElementById("updateModal").classList.remove("hidden");
    }

    function closeModal(modalId) {
      document.getElementById(modalId).classList.add("hidden");
    }
  </script>


  <!-- Script for Sidebar -->
  <script>
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

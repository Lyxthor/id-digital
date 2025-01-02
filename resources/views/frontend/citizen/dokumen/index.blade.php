@extends('layouts.user')
@prepend('style')
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
    <!-- Form Content -->
    <main>
        <div class="px-6 pt-6 pb-16">
            <div class="mb-6">
                <label for="user-category" class="block text-gray-700 font-medium mb-2">Kategori Pengguna</label>
                <select id="user-category"
                    class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="" disabled selected>Pilih Kategori Pengguna</option>
                    <option value="individu">Data Individu</option>
                    <option value="keluarga">Data Keluarga</option>
                </select>
            </div>

            <!-- Checklist Dokumen Individu -->
            <div id="checklist-dokumen" class="hidden bg-white shadow-sm rounded-lg p-4">
                <div class="grid grid-cols-2 gap-4 border-b border-gray-200 pb-2">
                    <div class="text-sm font-semibold text-gray-600">Jenis Dokumen</div>
                    <div class="text-sm font-semibold text-gray-600 text-right">Action</div>
                </div>
                <div class="mt-2 space-y-4">
                    <ul class="space-y-2">
                        <li class="flex justify-between items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-5 w-5 text-blue-600 border-gray-300 rounded mr-4">
                                <span>Kartu Keluarga (KK)</span>
                            </div>
                            <a href="#" class="text-blue-500 hover:underline">View Document</a>
                        </li>
                        <li class="flex justify-between items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-5 w-5 text-blue-600 border-gray-300 rounded mr-4">
                                <span>Kartu Tanda Penduduk (KTP)</span>
                            </div>
                            <a href="#" class="text-blue-500 hover:underline">View Document</a>
                        </li>
                        <li class="flex justify-between items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-5 w-5 text-blue-600 border-gray-300 rounded mr-4">
                                <span>Akta Kelahiran</span>
                            </div>
                            <a href="#" class="text-blue-500 hover:underline">View Document</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tabel Data Keluarga -->
            <!-- Dropdown Data Keluarga -->


            <!-- Tabel Data Keluarga -->
            <div id="data-keluarga" class="hidden bg-white shadow-sm rounded-lg p-4">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Nama
                            </th>
                            <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Posisi
                            </th>
                            <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">Joko</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">Ayah</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">
                                <!-- Icon Dropdown -->
                                <svg onclick="toggleDropdown('dropdown-joko')" class="h-6 w-6 text-gray-700 cursor-pointer"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                                </svg>
                                <!-- Dropdown -->
                                <div id="dropdown-joko" class="hidden mt-2 bg-gray-100 border border-gray-300 rounded p-2">
                                    <ul class="space-y-2">
                                        <li><input type="checkbox" class="h-4 w-4 mr-2">Kartu Keluarga</li>
                                        <li><input type="checkbox" class="h-4 w-4 mr-2">Kartu Tanda Penduduk</li>
                                        <li><input type="checkbox" class="h-4 w-4 mr-2">Akta Keluarga</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">Susi</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">Ibu</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">
                                <!-- Icon Dropdown -->
                                <svg onclick="toggleDropdown('dropdown-susi')" class="h-6 w-6 text-gray-700 cursor-pointer"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                                </svg>
                                <!-- Dropdown -->
                                <div id="dropdown-susi" class="hidden mt-2 bg-gray-100 border border-gray-300 rounded p-2">
                                    <ul class="space-y-2">
                                        <li><input type="checkbox" class="h-4 w-4 mr-2">Kartu Keluarga</li>
                                        <li><input type="checkbox" class="h-4 w-4 mr-2">Kartu Tanda Penduduk</li>
                                        <li><input type="checkbox" class="h-4 w-4 mr-2">Akta Keluarga</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- Script JavaScript -->
            <script>
                function toggleTable(id) {
                    const table = document.getElementById(id);
                    // Tampilkan atau sembunyikan tabel
                    if (table.classList.contains('hidden')) {
                        table.classList.remove('hidden');
                    } else {
                        table.classList.add('hidden');
                    }
                }

                function toggleDropdown(id) {
                    const dropdown = document.getElementById(id);
                    // Tampilkan atau sembunyikan dropdown
                    if (dropdown.classList.contains('hidden')) {
                        dropdown.classList.remove('hidden');
                    } else {
                        dropdown.classList.add('hidden');
                    }
                }
            </script>


            <!-- Button Confirmation -->
            <div class="mt-6 text-center">
                <!-- Tombol Konfirmasi -->
                <button
                    class="bg-[#124868] text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 w-full"
                    onclick="showPopup()">
                    Konfirmasi Pengumpulan Dokumen
                </button>
            </div>
    </main>

    <!-- Background Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden" onclick="hidePopup()">
    </div>

    <!-- Pop-up -->
    <div id="popup"
        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-6 w-80 hidden">
        <div class="flex flex-col items-center">
            <!-- Icon -->
            <svg class="h-12 w-12 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor">
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
        // Fungsi untuk menampilkan pop-up
        function showPopup() {
            document.getElementById('popup').classList.remove('hidden');
            document.getElementById('overlay').classList.remove('hidden');
        }

        // Fungsi untuk menyembunyikan pop-up
        function hidePopup() {
            document.getElementById('popup').classList.add('hidden');
            document.getElementById('overlay').classList.add('hidden');
        }
    </script>

    <script>
        document.getElementById('user-category').addEventListener('change', function() {
            const dataKeluarga = document.getElementById('data-keluarga');
            const checklistDokumen = document.getElementById('checklist-dokumen');

            if (this.value === 'keluarga') {
                dataKeluarga.classList.remove('hidden');
                checklistDokumen.classList.add('hidden');
            } else if (this.value === 'individu') {
                checklistDokumen.classList.remove('hidden');
                dataKeluarga.classList.add('hidden');
            } else {
                dataKeluarga.classList.add('hidden');
                checklistDokumen.classList.add('hidden');
            }
        });

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

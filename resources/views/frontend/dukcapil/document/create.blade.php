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
{{-- {{ dd($document_types) }} --}}
     <!-- Form -->
    <main id="mainContent" class="p-6 space-y-6 transition-all duration-300">
        <form action="{{ route('dukcapil.documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-6 space-y-6">
                <h2 class="text-lg font-semibold text-gray-800">Data Diri</h2>
                <!-- Nama -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">
                    Nama <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="citizen_id" name="citizen_id" placeholder="enter user id"
                    class="mt-1 w-full border border-blue-500 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
                </div>

                <!-- NIK -->
                <div>
                    <label for="nik" class="block text-sm font-medium text-gray-700">
                    Document File <span class="text-red-500">*</span>
                    </label>
                    <input type="file" id="document_file" name="document_file"
                    class="mt-1 w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-md file:border-gray-300 file:bg-blue-50 file:text-blue-600 cursor-pointer" required>
                    <select
                    id="type_id" name="type_id"
                    class="block w-full bg-white border border-gray-300 rounded-md shadow-sm px-3 py-2 text-gray-800 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @if(isset($document_types)&&$document_types!=null&&$document_types->count()>0)
                            @foreach ($document_types as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        @else
                        @endif
                    </select>
                </div>



            <!-- Submit Button -->
                <div>
                    <button type="submit"
                    class="w-full bg-[#19456B] text-white py-2 rounded-md hover:bg-[#12344F] focus:outline-none focus:ring-2 focus:ring-[#19456B]"
                    >
                    Update
                    </button>
                </div>
            </div>
        </form>
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

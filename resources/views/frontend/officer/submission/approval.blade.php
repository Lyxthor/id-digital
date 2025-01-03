@extends('layouts.dashboard')
@section('content')
    <!-- Content -->
    <main id="mainContent" class="p-6 space-y-6 transition-all duration-300">
        <div class="px-6 py-4 flex-grow">
            <!-- User Section -->
            <div class="flex items-center space-x-3 mb-4">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 11c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"></path>
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
                        alt="KTP" class="w-80 h-80 object-contain rounded-md shadow-md bg-gray-100">
                    <span class="mt-2 text-sm text-gray-600">KTP</span>
                </div>
                <!-- Kartu Keluarga -->
                <div class="flex flex-col items-center">
                    <img src="https://asset-2.tstatic.net/bangka/foto/bank/images/20220312_ilustrasi-kartu-keluarga.jpg"
                        alt="Kartu Keluarga" class="w-80 h-80 object-contain rounded-md shadow-md bg-gray-100">
                    <span class="mt-2 text-sm text-gray-600">Kartu Keluarga</span>
                </div>
                <!-- Akte Kelahiran -->
                <div class="flex flex-col items-center">
                    <img src="https://ngulungkulon-munjungan.trenggalekkab.go.id/assets/files/artikel/sedang_1536662707IMG_20180911_173613.jpg"
                        alt="Akte Kelahiran" class="w-80 h-80 object-contain rounded-md shadow-md bg-gray-100">
                    <span class="mt-2 text-sm text-gray-600">Akte Kelahiran</span>
                </div>
            </div>
    </main>
@endsection

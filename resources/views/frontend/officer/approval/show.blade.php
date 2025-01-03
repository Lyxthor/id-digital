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

                <!-- Akte Kelahiran -->
                @if(isset($documents) && $documents!=null && $documents->count() > 0)
                    @foreach ($documents as $item)
                    <div class="flex flex-col items-center">
                        <img src="{{ route('document.display', ['filename'=>'2389f82ddb2281b8f1264f54aed215444b89a2baf2a47fe6c0af54543294da27.enc']) }}"
                            alt="Akte Kelahiran" class="w-80 h-80 object-contain rounded-md shadow-md bg-gray-100">
                        <span class="mt-2 text-sm text-gray-600">{{ $item->document_type->name }}</span>
                    </div>
                    @endforeach
                @else
                @endif
            </div>
    </main>
@endsection

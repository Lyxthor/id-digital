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

          <form action="{{ route('officer.submissions.store') }}" method="POST" class="grid grid-cols-2 gap-6">
            @csrf
            <div>
              <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
              <input id="title" name="title" type="text" placeholder="Input judul" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2" >
            </div>
            <div>
              <label for="region" class="block text-sm font-medium text-gray-700">Region Tujuan</label>
              <div class="relative inline-block w-64 mb-4">
                <button class="dropdownButton block w-full px-4 py-2 mt-2 text-left bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="button">
                  Select Region
                </button>
                <div class="dropdownMenu absolute hidden mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                  <div class="p-2">
                    @if (isset($domains)&&$domains!=null&&$domains->count() > 0)
                        @foreach ($domains as $item)
                            <label class="flex items-center">
                                <input type="checkbox" value="{{ $item }}" name="domains[]" class="mr-2"> {{ $item }}
                            </label>
                        @endforeach
                    @else
                    @endif
                  </div>
                </div>
                {{-- <p class="selectedOptions mt-2 text-gray-500 text-sm">Selected: None</p> --}}
              </div>
            </div>


            <div class="col-span-2">
              <label for="desc"  class="block text-sm font-medium text-gray-700">Deskripsi</label>
              <textarea id="desc" name="desc" placeholder="Deskripsi submission" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2" rows="3"></textarea>
            </div>
            <div>
              <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
              <input id="deadline" name="deadline" type="datetime-local" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-[#124868] focus:border-[#124868] px-4 py-2">
            </div>
            <div>
                <label for="document_requirements" class="block text-sm font-medium text-gray-700">Tipe Dokumen</label>
                <div class="relative inline-block w-64 mb-4">
                    <button class="dropdownButton block w-full px-4 py-2 mt-2 text-left bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="button">
                      Select Required Document
                    </button>
                    <div class="dropdownMenu absolute hidden mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                      <div class="p-2">
                        @if (isset($document_types)&&$document_types!=null&&$document_types->count() > 0)
                            @foreach ($document_types as $item)
                                <label class="flex items-center">
                                    <input type="checkbox" value="{{ $item->id }}" name="document_requirements[]" class="mr-2"> {{ $item->name }}
                                </label>
                            @endforeach
                        @else

                        @endif
                      </div>
                    </div>
                    {{-- <p class="selectedOptions mt-2 text-gray-500 text-sm">Selected: None</p> --}}
                  </div>
              </div>
            <div class="col-span-2">
              <button type="submit" class="w-full bg-[#124868] text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Submit
              </button>
            </div>
          </form>
        </div>
    </main>
    <script>
        // Get all dropdown buttons and their respective dropdown menus
        const dropdownButtons = document.querySelectorAll('.dropdownButton');
        const dropdownMenus = document.querySelectorAll('.dropdownMenu');
        const selectedOptionsDisplays = document.querySelectorAll('.selectedOptions');

        // Loop through all the dropdown buttons to add event listeners
        dropdownButtons.forEach((button, index) => {
        const dropdownMenu = dropdownMenus[index];
        const selectedOptionsDisplay = selectedOptionsDisplays[index];
        const checkboxes = dropdownMenu.querySelectorAll('input[type="checkbox"]');

        // Toggle the dropdown menu visibility
        button.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });

        // Update the selected options display when any checkbox is changed
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
            const selectedOptions = Array.from(checkboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);
            selectedOptionsDisplay.textContent = `Selected: ${selectedOptions.join(', ') || 'None'}`;
            });
        });
        });


    </script>
@endsection

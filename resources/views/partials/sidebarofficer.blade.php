
<aside class="flex-shrink-0 w-64 bg-custom-blue text-white flex flex-col items-center py-6 h-full">
    <!-- Profil -->
    <div class="mb-8 flex flex-col items-center">
        <div class="w-20 h-20 bg-gray-300 rounded-full flex items-center justify-center">
            <!-- Placeholder Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c4.418 0 8 3.582 8 8H4c0-4.418 3.582-8 8-8zm0-4a4 4 0 110-8 4 4 0 010 8z" />
            </svg>
        </div>
        <p class="mt-4 text-center text-lg font-semibold">Halo</p>
    </div>
    <!-- Navigasi -->
    <nav class="w-full">
        <ul class="space-y-4">
            <li>
                <a href="{{ route('showSubmissionPage') }}" class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg class="h-8 w-8 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 16 12 12 8 16" />
                        <line x1="12" y1="12" x2="12" y2="21" />
                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3" />
                        <polyline points="16 16 12 12 8 16" />
                    </svg>
                    <span>Submission</span>
                </a>

            <li>
                <a href="./login.html" class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 8v-2a2 2 0 0 0-2-2h-7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2" />
                        <path d="M7 12h14l-3-3m0 6l3-3" />
                    </svg>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

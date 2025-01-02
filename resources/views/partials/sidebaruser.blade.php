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
                <a href="{{ route('citizen.submissions.index') }}" class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg class="h-8 w-8 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 16 12 12 8 16" />
                        <line x1="12" y1="12" x2="12" y2="21" />
                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3" />
                        <polyline points="16 16 12 12 8 16" />
                    </svg>
                    <span>Submission</span>
                </a>
            </li>
            <li>
                <a href="{{ route('citizen.documents.index') }}" class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg class="h-8 w-8 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" y1="13" x2="8" y2="13" />
                        <line x1="16" y1="17" x2="8" y2="17" />
                        <polyline points="10 9 9 9 8 9" />
                    </svg>
                    <span>Document</span>
                </a>
            </li>
            <li>
                <a href="./request.html" class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg class="h-8 w-8 text-gray-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="6" cy="18" r="2" />
                        <circle cx="6" cy="6" r="2" />
                        <circle cx="18" cy="18" r="2" />
                        <line x1="6" y1="8" x2="6" y2="16" />
                        <path d="M11 6h5a2 2 0 0 1 2 2v8" />
                        <polyline points="14 9 11 6 14 3" />
                    </svg>
                    <span>Request</span>
                </a>
            </li>
            <li>
                <a href="./profil.html" class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    <span>Profile</span>
                </a>
            </li>
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

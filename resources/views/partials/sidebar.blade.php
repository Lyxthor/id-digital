<aside class="flex-shrink-0 w-64 bg-custom-blue text-white flex flex-col items-center py-6 h-full">
    <!-- Profil -->
    <div class="mb-8 flex flex-col items-center">
        <div class="w-20 h-20 bg-gray-300 rounded-full flex items-center justify-center">
            <!-- Placeholder Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14c4.418 0 8 3.582 8 8H4c0-4.418 3.582-8 8-8zm0-4a4 4 0 110-8 4 4 0 010 8z" />
            </svg>
        </div>
        <p class="mt-4 text-center text-lg font-semibold">Halo</p>
    </div>
    <!-- Navigasi -->
    <nav class="w-full">
        <ul class="space-y-4">
            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboardPage') }}"
                    class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                      </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Input Submission -->
            <li>
                <a href="{{ route('submissionPage') }}"
                    class="flex items-center py-3 px-6 gap-2 text-base hover:bg-blue-700 rounded transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                    <span>Submission</span>
                </a>
            </li>
            <!-- CRU Penduduk -->
            <li>
                <a href="{{ route('masterPendudukPage') }}"
                    class="flex items-center gap-2  py-3 px-6 text-base hover:bg-blue-700 rounded transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                      </svg>
                    <span>Master Data Penduduk</span>
                </a>
            </li>
            <!-- Profil -->
            <li>
                <a href="./profil.html"
                    class="flex items-center py-3 px-6 text-base hover:bg-blue-700 rounded transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white mr-3" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    <span>Profil</span>
                </a>
            </li>
            <!-- Keluar -->
            <li>
                <a href="./login.html"
                    class="flex items-center py-3 gap-2 px-6 text-base hover:bg-blue-700 rounded transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                      </svg>

                    <span>Keluar</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

@extends('layouts.admin')
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
    <body class="bg-gray-100 min-h-screen">
        <div class="flex h-screen">
            @include('partials.sidebarofficer')
            <!-- Main Content -->
            <main class="flex-1 bg-gray-50 p-8">
                <div class="container mx-auto">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-custom-blue">Submissions</h1>
                        <a href="{{ route('showSubmissionOfficerDetail') }}" class="bg-custom-blue text-white px-4 py-2 rounded">Add
                            Submission</a>
                    </div>
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Judul</th>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Deadline</th>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Tanggal Upload</th>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Author</th>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Deskripsi</th>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Tujuan Submission</th>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Dokumen Type</th>
                                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">Data Kesehatan</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-12-31</td>
                                    <td class="py-2 px-4 border-b border-gray-200">2023-11-01</td>
                                    <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                                    <td class="py-2 px-4 border-b border-gray-200">Blabalabala</td>
                                    <td class="py-2 px-4 border-b border-gray-200">RT</td>
                                    <td class="py-2 px-4 border-b border-gray-200">PDF</td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <button class="bg-blue-400 text-white px-3 py-2 rounded">Show</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </body>
@endsection

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
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-custom-blue">Submissions</h1>
                <a href="{{ route('addSubmissionPage') }}" class="bg-custom-blue text-white px-4 py-2 rounded">Add Submission</a>
            </div>
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">ID</th>
                            <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Title</th>
                            <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Region Tujuan</th>
                            <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Description</th>
                            <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Deadline</th>
                            <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">1</td>
                            <td class="py-2 px-4 border-b border-gray-200">Data Kesehatan</td>
                            <td class="py-2 px-4 border-b border-gray-200">RT</td>
                            <td class="py-2 px-4 border-b border-gray-200">Blabalabala</td>
                            <td class="py-2 px-4 border-b border-gray-200">2023-12-31</td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                                <form action="#" method="POST" class="inline-block">
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

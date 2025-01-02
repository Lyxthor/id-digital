@extends('layouts.user')
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
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-custom-blue">Data Kesehatan</h2>
                        <p class="text-gray-600 mt-2">Added by: PUPR</p>
                        <p class="text-gray-600 mt-2">Deadline: 19 Oktober 2024</p>
                        <p class="text-gray-600 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum ad facere
                            doloremque pariatur provident obcaecati cupiditate voluptatum est aut tempora?</p>
                        <div class="mt-4">
                            <button class="bg-custom-blue text-white px-4 py-2 rounded">Approve</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-custom-blue">Data Kesehatan</h2>
                        <p class="text-gray-600 mt-2">Added by: PUPR</p>
                        <p class="text-gray-600 mt-2">Deadline: 19 Oktober 2024</p>
                        <p class="text-gray-600 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum ad facere
                            doloremque pariatur provident obcaecati cupiditate voluptatum est aut tempora?</p>
                        <div class="mt-4">
                            <button class="bg-custom-blue text-white px-4 py-2 rounded">Approve</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-custom-blue">Data Kesehatan</h2>
                        <p class="text-gray-600 mt-2">Added by: PUPR</p>
                        <p class="text-gray-600 mt-2">Deadline: 19 Oktober 2024</p>
                        <p class="text-gray-600 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum ad facere
                            doloremque pariatur provident obcaecati cupiditate voluptatum est aut tempora?</p>
                        <div class="mt-4">
                            <button class="bg-custom-blue text-white px-4 py-2 rounded">Approve</button>
                        </div>
                    </div>
            </div>
        @endsection

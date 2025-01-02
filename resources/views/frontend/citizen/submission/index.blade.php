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
                @if ($submissions!=null && $submissions->count() > 0)
                    @foreach ($submissions as $item)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="p-4">
                                <h2 class="text-xl font-bold text-custom-blue">{{ $item->title }}</h2>
                                <p class="text-gray-600 mt-2">Added by: </p>
                                <p class="text-gray-600 mt-2">Deadline: {{ $item->deadline }}</p>
                                <p class="text-gray-600 mt-2">{{ $item->desc }}</p>
                                <div class="mt-4">
                                    <a href="{{ route('citizen.submissions.show', ['id'=>$item->id]) }}" class="bg-custom-blue text-white px-4 py-2 rounded">Approve</a>
                                    {{-- <button class="bg-custom-blue text-white px-4 py-2 rounded">Approve</button> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>No submission found</div>
                @endif
        @endsection

@extends('layouts.admin')

@section('content')
<main class="container mx-auto px-6 py-8">
    <div class="row flex justify-center">
        <form action="{{ route('officer.privileges.store') }}" method="post" class="w-1/2">
            @csrf
            <div class="px-6 pt-6 pb-16">
                <div class="mb-6">
                    <label for="user-category" class="block text-gray-700 font-medium mb-2">Privilege Officer</label>
                    <select id="user-category"
                        class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" name="privilege_id">
                        @if ($privileges!=null && $privileges->count() > 0)
                            @foreach ($privileges as $p)
                            <option value="{{ $p->id }}">{{ $p->authorizable_type." ".$p->id }}</option>
                            @endforeach
                        @else

                        @endif
                    </select>
                </div>
                <div class="mb-6">
                    <button type="submit"
                        class=" bg-teal-500 text-white py-3 px-6 rounded hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-400">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection


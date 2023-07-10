@extends('layouts.app')
@section('content')
<div class="rounded-lg shadow m-4 w-[76.2%] h-[100%] float-right bg-gray-800">
    <div class="w-full p-4">
        <h1 class="text-3xl mt-11 font-bold text-white">Data Ticket</h1>
        <p class="mt-2 text-white">Form Checkin</p>
        <div class="mb-4">
            <form class="w-[70%] mt-6" method="POST" action="{{ route('check-post') }}">
                @csrf
                <div class="mb-4">
                    <label for="noId" class="block mb-2 text-white">No ID</label>
                    <input type="text" id="noId" name="noId" class="block rounded-lg w-full text-white bg-gray-700 border-gray-600 focus:border-blue-500 focus:ring-blue-500" value="" required>
                </div>
                <button type="submit" class="text-white rounded-lg w-full sm:w-auto px-5 py-2 text-center bg-blue-700 hover:bg-blue-800 focus:ring-blue-800">Cari</button>
            </form>
        </div>

        @if(isset($data))
            @if($data->isNotEmpty())
                <div class="mt-6">
                    <p class="text-white">Data ditemukan:</p>
                    @foreach($data as $item)
                    <div class="mb-4">
                        <label for="noId" class="block mb-2 text-white">No ID</label>
                        <input type="text" id="noId" name="noId" class="block rounded-lg w-full text-white bg-gray-700 border-gray-600 focus:border-blue-500 focus:ring-blue-500" value="{{ $item->noId }}" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-white">Name</label>
                        <input type="text" id="name" name="name" class="block rounded-lg w-full text-white bg-gray-700 border-gray-600 focus:border-blue-500 focus:ring-blue-500" value="{{ $item->name }}" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-white">Email</label>
                        <input type="text" id="email" name="email" class="block rounded-lg w-full text-white bg-gray-700 border-gray-600 focus:border-blue-500 focus:ring-blue-500" value="{{ $item->email }}" readonly>
                    </div>
                    <form action="/check-ticket/{{ $item->id }}" method="POST">
                        @csrf
                        <button @if($item->status == 2) disabled class="text-white rounded-lg w-full sm:w-auto px-5 py-2 text-center bg-gray-600" @else class="text-white rounded-lg w-full sm:w-auto px-5 py-2 text-center bg-blue-700 hover:bg-blue-800 focus:ring-blue-800" @endif type="submit">Check</button>
                    </form>
                @endforeach
                </div>
            @else
                <p class="text-white mt-6">Data tidak ditemukan. Silakan masukkan No ID pada kolom di atas untuk mencari data.</p>
            @endif
        @endif

        @if(!isset($data))
            <div class="mt-6">
                <p class="text-white">Masukkan No ID pada kolom di atas untuk mencari data.</p>
            </div>
        @endif
    </div>
</div>
@endsection
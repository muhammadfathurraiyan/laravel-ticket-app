@extends('layouts.app')
@section('content')
<div class="rounded-lg shadow m-4 w-[76.2%] h-[100%] float-right bg-gray-800">
    <div class="w-full p-4">
        <small class="font-bold float-right mx-5 text-cyan-600">Hai Admin</small>
        <h1 class="text-3xl mt-11 font-bold text-white"> Data Ticket </h1>
        <p class="mt-2 text-white">Form edit data</p>
        <form class="w-[70%] mt-6" method="POST" action="/entri-data/{{ $data->id }}/update">
            @csrf
            <div class="mb-4">
                <label for="noId" class="block mb-2 text-white">No Id</label>
                <input type="noId" id="noId" class="block rounded-lg h-12 px-4 w-full text-white bg-gray-700 border-gray-600 focus:border-blue-500 focus:ring-blue-500" value="{{ $data->noId }}"  readonly>
            </div>
            <div class="mb-4">
                <label for="name" class="block mb-2 text-white">Nama</label>
                <input type="text" id="name" name="name" class="block rounded-lg w-full  text-white bg-gray-700 border-gray-600 focus:border-blue-500 focus:ring-blue-500" value="{{ $data->name }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-white">email</label>
                <input type="email" id="email" name="email" class="block rounded-lg w-full  text-white bg-gray-700 border-gray-600 focus:border-blue-500 focus:ring-blue-500" value="{{ $data->email }}" required>
            </div>
            
            <button type="submit" class="text-white rounded-lg w-full sm:w-auto px-5 py-2 text-center bg-blue-700 hover:bg-blue-800 focus:ring-blue-800">Simpan</button>
        </form>
    </div>
</div>
@endsection
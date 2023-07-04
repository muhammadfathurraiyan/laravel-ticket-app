@extends('layouts.app')
@section('content')
<div class=" ml-80 bg-gray-00">
    <div class="w-full p-4">
        <small class="font-bold float-right mx-5 text-cyan-600">Hai Admin</small>
        <h1 class="text-3xl mt-36 font-bold text-white"> Beranda </h1>
        <p class="text-xl mt-2 text-white">Selamat Datang {{ Auth::user()->name }} di TicketApp.</p>
    </div>
</div>
@endsection

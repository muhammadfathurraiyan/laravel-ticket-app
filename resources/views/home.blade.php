@extends('layouts.app')
@section('content')
    <div id="home" class="max-w-screen-xl flex flex-wrap items-center justify-center pt-40 mx-auto p-4">
        @include('partials.header')
    </div>
    <div id="pesan" class="max-w-screen-xl pt-24 items-center justify-center mx-auto">
        <h1 class="mb-2 text-center text-2xl font-bold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">Pesan Tiketmu</h1>
        <p class="mb-12 text-center text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Pesan tiketmu sekarang.</p>
        <div class="flex flex-wrap items-center justify-center mx-auto gap-x-32 gap-y-8">
            @include('partials.form')
        </div>
    </div>
    <div id="tentang" class="max-w-screen-xl flex flex-wrap items-center justify-center pt-40 pb-40 mx-auto p-4">
        @include('partials.about')
    </div>
@endsection

@extends('layouts.app')
@section('content')
<div class="rounded-lg shadow m-4 w-[76.2%] h-[78vh] float-right bg-gray-800">
    <div class="w-full p-4">
        <h1 class="text-3xl mt-11 font-bold text-white"> Data Status </h1>
        <p class="mt-1 mb-5 text-white">Status chekin</p>
        <div class="relative overflow-x-auto border border-gray-700 mt-2 rounded-lg">
            <table class="w-full text-sm text-center">
                <thead class="uppercase bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap text-white">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap text-white">
                            No ID
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap text-white">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap text-white">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium whitespace-nowrap text-white">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $data)
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <td class="px-6 py-4 font-medium whitespace-nowrap text-white" >
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 font-medium whitespace-nowrap text-white">
                            {{ $data->noId }}
                        </td>
                        <td class="px-6 py-4 font-medium whitespace-nowrap text-white">
                            {{ $data->name }}
                        </td>
                        <td class="px-6 py-4 font-medium whitespace-nowrap text-white">
                            {{ $data->email }}
                        </td>
                        <td class="px-6 py-4 font-medium whitespace-nowrap text-white">
                            @if($data->status == '1' ) Belum chekin @else Sudah chekin @endif</td>
                        </td>
                    </tr> 
                @endforeach       
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
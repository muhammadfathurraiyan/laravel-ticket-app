<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function index() {
        return view('home');
    }

    public function create(Request $request)
    {
        $data = new Data();
        $name = $request->name;
        $email = $request->email;
        $status = $request->status;
        $noId = Str::random(30);
        $data->name = $name;
        $data->email = $email;
        $data->status = $status;
        $data->noId = $noId;        
        // Membuat gambar menggunakan data yang diinput
        $image = Image::canvas(800, 400)->text($name, 400, 100, function ($font) {
            $font->file(public_path('arial.ttf'));
            $font->size(40);
            $font->color('#000000');
            $font->align('center');
            $font->valign('middle');
        })->text($email, 400, 150, function ($font) {
            $font->file(public_path('arial.ttf'));
            $font->size(40);
            $font->color('#000000');
            $font->align('center');
            $font->valign('middle');
        })->text($noId, 400, 200, function ($font) {
            $font->file(public_path('arial.ttf'));
            $font->size(40);
            $font->color('#000000');
            $font->align('center');
            $font->valign('middle');
        });

        // Simpan gambar ke file sementara
        $imagePath = 'img/temp_image.jpg';
        $image->save(public_path($imagePath));

        $data->save();
        // Mengirimkan gambar sebagai respons untuk diunduh
        return Response::download(public_path($imagePath))->deleteFileAfterSend(true);
    }
}

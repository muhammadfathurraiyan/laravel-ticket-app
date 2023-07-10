<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beranda() {
        return view('beranda');
    }

    public function entri() {
        $data = Data::latest()->get();
        return view('entri-data')->with(compact('data'));
    }

    public function showCheckForm()
    {
        return view('check-ticket');
    }

    public function check(Request $request)
    {
        $search = $request->input('noId');
        $data = Data::where('noId', '=', $search)->latest()->get();

        return view('check-ticket', [
            'data' => $data
        ]);
    }

    public function detail($id)
    {
        $data = Data::where('id', $id)->first();
        return view('edit')->with(compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Data::where('id', $id)->first();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->update();
        return redirect()->route('entri');
    }

    public function delete($id)
    {   
        $data = Data::find($id);
        $data->delete();
        return redirect()->route('entri');
    }

    public function validasi($id)
    {   
        $data = Data::find($id);
        $data->status = "2";
        $data->update();
        return redirect()->route('check');
    }

    public function chekin() {
        $data = Data::latest()->get();
        return view('validasi')->with(compact('data'));
    }
}

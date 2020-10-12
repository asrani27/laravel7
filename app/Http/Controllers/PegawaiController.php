<?php

namespace App\Http\Controllers;

use App\angka;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'data' => angka::paginate(1),
        ]);
    }
    public function update(Request $req, $id)
    {
        angka::find($id)->update([
            'number' => $req->number,
        ]);
        return redirect('?page=' . $req->currentPage);
    }
}

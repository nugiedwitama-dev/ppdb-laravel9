<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_siswa' => 'required|max:255',
            'nama_pengirim' => 'required',
            'bank' => 'required',
            'bukti' => 'image|file|max:2048',
        ]);

        if($request->file('bukti')){
            $validatedData['bukti'] = $request->file('bukti')->store('bukti-pembayaran');
        }
        $validatedData['user_id'] = auth()->user()->id;
    Payment::create($validatedData);

    return redirect('/dashboard')->with('success','Bukti Transfer berhasil diupload');
    }
}

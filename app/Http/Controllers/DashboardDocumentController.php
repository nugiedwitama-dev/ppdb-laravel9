<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view('psb.document.index',
        [
            "documents" => Formulir::where('user_id', auth()->user()->id)->get()
            
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function show(Formulir $formulir)
    {
        return view('psb.document.show',[
            "statuses" => User::where('id', auth()->user()->id)->get(),
            "documents" => Payment::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulir $formulir)
    {
        return view('psb.document.edit',[
            'document' => $formulir
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulir $formulir)
    {
        $rules = [
            'pas_foto' => 'image|file|max:2048',
            'akta' => 'file|mimes:pdf',
            'piagam' => 'file|mimes:pdf',
            'nilai' => 'file|mimes:pdf',
        ];
        $validatedData = $request->validate($rules);
        if($request->file('pas_foto')){
            if($formulir->pas_foto){
                Storage::delete($formulir->pas_foto);
            }
            $validatedData['pas_foto'] = $request->file('pas_foto')->store('pas-foto');
        }
        if($request->file('akta')){
            if($formulir->akta){
                Storage::delete($formulir->akta);
            }
            $validatedData['akta'] = $request->file('akta')->store('akta');
        }
        if($request->file('piagam')){
            if($formulir->piagam){
                Storage::delete($formulir->piagam);
            }
            $validatedData['piagam'] = $request->file('piagam')->store('piagam');
        }
        if($request->file('nilai')){
            if($formulir->nilai){
                Storage::delete($formulir->nilai);
            }
            $validatedData['nilai'] = $request->file('nilai')->store('nilai');
        }
        Formulir::where('id', $formulir->id)
            ->update($validatedData);

        return redirect('/dashboard/cekdokumen')->with('success','Dokumen berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulir $formulir)
    {
        //
    }
}

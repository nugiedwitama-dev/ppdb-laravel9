<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('psb.formulir.index',[
            'title' => "PSB",
            'active' => 'psb'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'nama' => 'required|max:255',
            'nik' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nama_ortu' => 'required',
            'alamat_ortu' => 'required',
            'phone_ortu' => 'required|numeric',
            'asal_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'provinsi_sekolah' => 'required',
            'kabupaten_sekolah' => 'required',
            'phone_sekolah' => 'required|numeric',
            'keahlian1' => 'required',
            'keahlian2' => 'required',
            'file|mimes:pdf',
            'akta' => 'file|mimes:pdf',
            'piagam' => 'file|mimes:pdf',
            'nilai' => 'file|mimes:pdf',
        ]);
         if($request->file('pas_foto')){
             $validatedData['pas_foto'] = $request->file('pas_foto')->store('pas-foto');
         }
         if($request->file('akta')){
             $validatedData['akta'] = $request->file('akta')->store('akta');
         }
         if($request->file('piagam')){
             $validatedData['piagam'] = $request->file('piagam')->store('piagam');
         }
         if($request->file('nilai')){
             $validatedData['nilai'] = $request->file('nilai')->store('nilai');
         }
         $validatedData['user_id'] = auth()->user()->id;
         Formulir::create($validatedData);

         return redirect('/psb/verivikasi')->with('success','Formulir berhasil terkirim, tunggu proses verivikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function show(Formulir $formulir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formulir  $formulir
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulir $formulir)
    {
        //
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
        $request->validate([
            'pas_foto' => 'file|mimes:pdf',
            'akta' => 'file|mimes:pdf',
            'piagam' => 'file|mimes:pdf',
            'nilai' => 'file|mimes:pdf',
        ]);
        
         $pasFoto = '';
         if ($request->hasFile('pas_foto')){
             $pasFoto = time() . '.' . $request->pas_foto->extension();
             $request->pas_foto->storeAs('pas-foto/', $pasFoto);
             if($formulir->pas_foto) {
                 Storage::delete($formulir->pas_foto);
             }
         } else {
             $pasFoto = $formulir->pas_foto();
         }
         $akta = '';
         if ($request->hasFile('akta')){
             $akta = time() . '.' . $request->akta->extension();
             $request->akta->storeAs('akta/', $akta);
             if($formulir->akta) {
                 Storage::delete($formulir->akta);
             }
         } else {
             $akta = $formulir->akta();
         }
         $piagam = '';
         if ($request->hasFile('piagam')){
             $piagam = time() . '.' . $request->piagam->extension();
             $request->piagam->storeAs('piagam/', $piagam);
             if($formulir->piagam) {
                 Storage::delete($formulir->piagam);
             }
         } else {
             $piagam = $formulir->piagam();
         }
         $nilai = '';
         if ($request->hasFile('nilai')){
             $nilai = time() . '.' . $request->nilai->extension();
             $request->nilai->storeAs('nilai/', $nilai);
             if($formulir->nilai) {
                 Storage::delete($formulir->nilai);
             }
         } else {
             $nilai = $formulir->nilai();
         }
         $postData =['pas_foto' => $pasFoto, 'akta' => $akta, 'piagam' => $piagam, 'nilai' => $nilai];

         $formulir->update($postData);
         return redirect('/dashboard')->with('success','Dokumen berhasil diperbarui');

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

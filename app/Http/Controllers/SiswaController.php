<?php

namespace App\Http\Controllers;


use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('home',[
            'jurusan' => Jurusan::get(),
            'kelas' => Kelas::get(),
            'siswa'=>Siswa::with('kelas','jurusan')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create',[
            'jurusans' => Jurusan::get(),
            'kelas' => Kelas::get(),
            'siswas'=>Siswa::with('kelas')->get(),
        ]);




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $post = new Siswa;


       $post->nis           = $request->nis;
       $post->nama          = $request->nama;
       $post->jenis_kelamin = $request->jenis_kelamin;
       $post->alamat        = $request->alamat;
       $post->no_hp         = $request->no_hp;
       $post->jurusan_id    = $request->id_jurusan;
       $post->kelas_id      = $request->id_kelas;


       $post->save();

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}

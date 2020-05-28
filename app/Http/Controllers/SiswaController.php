<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_siswa = \App\Siswa::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_siswa = \App\Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt(123);
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        \App\Siswa::create($request->all());

        return redirect('/siswa')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }
    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'Data berhasil di update');
    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil di hapus');
    }
    public function profile($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa.profile', ['siswa' => $siswa]);
    }
}
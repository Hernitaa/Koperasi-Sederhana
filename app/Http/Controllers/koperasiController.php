<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log; 

class koperasiController extends Controller
{

    //halaman profil
    public function home(){
        return view('profil.home');
    }

    public function sambutan(){
        return view('profil.sambutan');
    }

    public function sejarah(){
        return view('profil.sejarah');
    }
    
    public function struktur(){
        return view('profil.struktur');
    }
    
    public function fasilitas(){
        return view('profil.fasilitas');
    }
        
    public function peta(){
        return view('profil.peta');
    }
        
    //pengawas
    public function dashboardPengawas(){
        return view('pengawas.dashboardPengawas');
    }

    public function RUID(){
        return view('pengawas.RUID');
    }
    
    public function laporan(){
        return view('pengawas.laporan');
    }
    
    public function perubahan(){
        return view('pengawas.perubahan');
    }

    //pengurus
    public function dashboardPengurus(){
        return view('pengurus.dashboardPengurus');
    }

    public function profilPengurus(){
        return view('pengurus.profilPengurus');
    }

    public function editAnggota(string $id){
        $User = user::findorfail($id);
        return view('anggota.editAnggota', compact('User'));
    }

    public function updateAnggota(Request $req, string $id){
        $ubah = user::findorfail($id);
        $awal = $ubah->gambar;

        $User =[
            'name' =>$req['name'],
            'email' =>$req['email'],
            'alamat' =>$req['alamat'],
            'no_telp' =>$req['no_telp'],
            'foto' => $awal
        ];
        $req->gambar->move(public_path().'/foto', $awal);
        $ubah->update($User);

        return redirect('/product');
    }

    public function anggotaBaru(){
        return view('pengurus.tambahAnggota');
    }

    public function transaksi(){
        return view('pengurus.transaksi');
    }

    public function anggotaDone() {
        return view('pengurus.anggotaDone');
    }

    public function agenda(){
        return view('pengurus.agenda');
    }
    
    public function dokumen(){
        return view('pengurus.dokumen');
    }

    public function kegiatan(){
        return view('pengurus.kegiatan');
    }

    public function koperasi() {
        return view('pengurus.koperasi');
    }

    public function perhitunganSHU(){
        return view('pengurus.perhitunganSHU');
    }
    
    public function aset(){
        return view('pengurus.aset');
    }

    public function createAnggota(Request $request)
    {
        
        // Flash data untuk penggunaan satu kali
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        //Validasi request baru
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ],[
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password harus diisi'
        ]);

        // Prepare the data to be saved
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ];
        

        //Membuat user baru 
        try {
            $user = new User($data);
            $user->save();
            return redirect('/anggotaDone')->with('success', 'User created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            return back()->with('error', 'Failed to create user: ' . $e->getMessage());
        }
    }

    //halaman anggota
    public function anggotaProfil(){
        return view('anggota.anggotaProfil');
    }

    public function editProfil(){
        return view('anggota.editProfil');
    }

    public function pengajuan(){
        return view('anggota.pengajuan');
    }

    public function angsuran(){
        return view('anggota.angsuran');
    }

    public function setor(){
        return view('anggota.setor');
    }

    public function SHU(){
        return view('anggota.SHU');
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

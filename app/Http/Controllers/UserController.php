<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.infoPengguna', compact('user'));
    }
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required',
            'birthDate' => 'required',
            'agama' => 'required',
            'gender' => 'required',
            'password' => 'required'
        ]);

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'phoneNumber' => $request->phoneNumber,
                'address' => $request->address,
                'birthDate' => $request->birthDate,
                'agama' => $request->agama,
                'gender' => $request->gender,
                'password' => Hash::make($request->password)
            ]);


        return redirect()->route('user')->with('success', 'Koleksi berhasil diperbarui.');
    }
}
// Nama:  Fauzan Ramadhana Sadikin
// Nim:   6706220054
// Kelas: D3IF 4603
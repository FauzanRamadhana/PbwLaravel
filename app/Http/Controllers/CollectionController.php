<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::all();

        return view('koleksi.daftarKoleksi', compact(var_name: 'collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koleksi.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $collection = Collection::create([
                'namaKoleksi' => $request->namaKoleksi,
                'jenisKoleksi' => $request->jenisKoleksi,
                'jumlahKoleksi' => $request->jumlahKoleksi,
                'namaPengarang' => $request->namaPengarang,
                'namaPenerbit' => $request->namaPenerbit,
                'tahunTerbit' => $request->tahunTerbit
            ]);

            event(new Registered($collection));
        } catch (\Exception $e) {
            // Tangani kesalahan di sini
            return redirect()->back()->with('error', 'Gagal menyimpan data ke database.');
        }

        return redirect(RouteServiceProvider::COLLECTIONS);
    }
}
// Nama:  Fauzan Ramadhana Sadikin
// Nim:   6706220054
// Kelas: D3IF 4603
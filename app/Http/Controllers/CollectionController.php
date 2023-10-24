<?php

namespace App\Http\Controllers;

use App\DataTables\KoleksiDataTable;
use App\Models\Collection;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(KoleksiDataTable $dataTable)
    {
        return $dataTable->render('koleksi.daftarKoleksi');
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
    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('koleksi.infoKoleksi', compact('collection'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'namaKoleksi' => 'required',
            'jenisKoleksi' => 'required|in:1,2,3',
            'jumlahKoleksi' => 'required|numeric',

        ]);

        DB::table('collections')->where('id', $request->id)->update(
            [
                'namaKoleksi' => $request->namaKoleksi,
                'jenisKoleksi' => $request->jenisKoleksi,
                'jumlahKoleksi' => $request->jumlahKoleksi
            ]
        );
        return redirect()->route('koleksi')->with('success', 'Koleksi berhasil diperbarui.');
    }
}
// Nama:  Fauzan Ramadhana Sadikin
// Nim:   6706220054
// Kelas: D3IF 4603
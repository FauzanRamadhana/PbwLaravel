<?php

namespace App\Http\Controllers;

use App\DataTables\KoleksiDataTable;
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
        return view('koleksi.infoKoleksi', ['collection' => $collection]);
    }
}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4" style="font-weight: bold;">Edit Koleksi</h1>

    <form method="POST" action="{{ route('koleksiUpdate') }}">
        @method('PUT')
        @csrf

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $collection->id }}" />
                </div>

                <div class="form-group">
                    <label for="namaKoleksi">Nama Koleksi</label>
                    <input type="text" name="namaKoleksi" id="namaKoleksi" class="form-control"
                        value="{{ $collection->namaKoleksi }}">
                </div>

                <div class="form-group">
                    <label for="jenisKoleksi">Jenis Koleksi</label>
                    <select name="jenisKoleksi" id="jenisKoleksi" class="form-control">
                        <option value="1" {{ $collection->jenisKoleksi === 1 ? 'selected' : '' }}>Buku</option>
                        <option value="2" {{ $collection->jenisKoleksi === 2 ? 'selected' : '' }}>Majalah</option>
                        <option value="3" {{ $collection->jenisKoleksi === 3 ? 'selected' : '' }}>Cakram Digital
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jumlahKoleksi">Jumlah Koleksi</label>
                    <input type="number" name="jumlahKoleksi" id="jumlahKoleksi" class="form-control"
                        value="{{ $collection->jumlahKoleksi }}">
                </div>

                <div class="text-center mt-2">
                    <button class="btn btn-primary">Update</button>
                    <a href="{{ route('koleksi') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
// Nama: Fauzan Ramadhana Sadikin
// Nim: 6706220054
// Kelas: D3IF 4603
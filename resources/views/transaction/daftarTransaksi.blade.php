@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Manage Transaction</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
<!-- Nama: Fauzan Ramadhana Sadikin-->
<!-- NIM: 6706220054 -->
<!-- Kelas: 46-03 -->
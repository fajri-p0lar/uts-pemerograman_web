@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/' . $jurusan->foto) }}" class="img-fluid rounded shadow" alt="{{ $jurusan->nama_jurusan }}">
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold text-primary">{{ $jurusan->nama_jurusan }}</h1>
            <p class="badge bg-secondary">Keahlian SMK Al Barokah</p>
            <hr>
            <h3>Deskripsi Jurusan</h3>
            <p style="text-align: justify;">{{ $jurusan->deskripsi }}</p>
            
            <div class="mt-4">
                <a href="{{ url('/') }}" class="btn btn-outline-secondary">Kembali ke Beranda</a>
                <a href="#" class="btn btn-warning">Daftar Sekarang (PPDB)</a>
            </div>
        </div>
    </div>
</div>
@endsection
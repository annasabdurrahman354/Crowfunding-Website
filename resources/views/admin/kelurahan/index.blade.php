@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                Daftar Kelurahan
            </h6>

            @can('kelurahan_create')
                <a class="btn btn-indigo" href="{{ route('admin.kelurahan.create') }}">
                    Tambah Kelurahan
                </a>
            @endcan
        </div>
    </div>
    @livewire('admin.kelurahan.index')

</div>
@endsection

@extends('layouts.relawan')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                Buat Data Rekening
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('relawan.rekening.create')
    </div>
</div>
@endsection

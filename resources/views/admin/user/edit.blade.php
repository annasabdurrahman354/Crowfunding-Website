@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                Ubah Akun Pengguna: ID
                {{ $user->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('admin.user.edit', [$user])
    </div>
</div>
@endsection

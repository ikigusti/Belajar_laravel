@extends('layouts.admin')

@section('content')
    <div class="container">
        <br>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    Selamat, {{ Auth::User()->name }} Kamu berhasil Login
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('shared/base')

@section('judul','.::Home::.')

@section('navigasi')
<!-- @include('shared/navbar') -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="index2">ISB</a>
    <h2 style="color: white;">Selamat Datang {{ session('nama') }}
    </h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>


        </ul>
    </div>
</nav>
@endsection

@section('isi_konten')
<div class="row">
    <div class="col-sm-4">
        <h2 >Selamat Datang {{ session('nama') }}</h2>
        
    </div>
</div>
@endsection
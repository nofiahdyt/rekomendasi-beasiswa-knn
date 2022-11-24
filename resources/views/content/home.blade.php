@extends('layout.master')

@section('judul')
<title>Home</title>
@endsection

@section('data')
<h1>Dashboard</h1>
@endsection

@section('menu')
<li class="active"><a class="nav-link" href="{{ route('Home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mahasiswa')}}"><i class="fas fa-graduation-cap"></i> <span>Data Mahasiswa</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mk')}}"><i class="fas fa-book"></i> <span>Data Mata Kuliah</span></a></li>
<li class=""><a class="nav-link" href="{{ route('nilai')}}"><i class="fas fa-address-book"></i> <span>Data Nilai</span></a></li>
<li class=""><a class="nav-link" href="#"><i class="fas fa-check"></i> <span>Rekomendasi</span></a></li>
<li class=""><a class="nav-link" href="{{ route('testing')}}"><i class="fas fa-check"></i> <span>Testing</span></a></li>
<li class=""><a class="nav-link" href="{{ route('training')}}"><i class="fas fa-check"></i> <span>Training</span></a></li>
@endsection

@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Mahasiswa Diterima</h4>
          </div>
          <div class="card-body">
            {{$mterima}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="far fa-newspaper"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Mahasiswa Tidak Diterima</h4>
          </div>
          <div class="card-body">
            {{$mtidak}}
          </div>
        </div>
      </div>
    </div>
   
   
  </div>
</div>
@endsection
@extends('layout.master')

@section('judul')
<title>Nilai</title>
@endsection

@section('data')
<h1>Data Nilai</h1>
@endsection

@section('menu')
<li class=""><a class="nav-link" href="{{ route('Home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mahasiswa')}}"><i class="fas fa-graduation-cap"></i> <span>Data Mahasiswa</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mk')}}"><i class="fas fa-book"></i> <span>Data Mata Kuliah</span></a></li>
<li class="active"><a class="nav-link" href="{{ route('nilai')}}"><i class="fas fa-address-book"></i> <span>Data Nilai</span></a></li>
<li class=""><a class="nav-link" href="#"><i class="fas fa-check"></i> <span>Rekomendasi</span></a></li>
<li class=""><a class="nav-link" href="{{ route('training')}}"><i class="fas fa-check"></i> <span>Training</span></a></li>
@endsection

@section('content')
<div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        FORM TAMBAH DATA
        <hr>
        @if (session('message'))
          <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>×</span>
              </button>
              {{ session('message') }}
            </div>
          </div>
        @endif
        @foreach($nilaii as $nilai)

<form action="{{route('postupdatenilai',$nilai->id)}}" method="post" id="form-tambah">
          @csrf
<div class="row"> 
  <div class="col-md-12">
    <input type="hidden" name="id" value=" " id="id_data">
    <div class="form-group">
      
      <label @error('npm') 
      class="text-danger"  
      @enderror>NPM @error('npm') |
      {{ $message }} 
      @enderror</label>
      <select class="form-control form-control-sm" name="id_mhs" id="nama">
        <option value="{{$nilai->id_mhs}}">{{$nilai->npm}}</option>        
        @foreach($mahasiswa as $m)
        <option {{$mks=$m->nama}} value="{{$m->id}}">{{$m->npm}}</option>
        @endforeach
      </select>
      
      <label @error('nama') 
      class="text-danger" 
      @enderror>Nama Mahasiswa @error('nama') |
      {{ $message }} 
      @enderror</label>
      <input type="text" id="tampil" value="{{$mks}}" class="form-control">

      <label @error('prodi') 
      class="text-danger" 
      @enderror>Program Studi @error('prodi') |
      {{ $message }} 
      @enderror</label>
      <select class="form-control form-control-sm" name="id_mk" id="prodi">
        <option value="{{$nilai->id_mk}}">{{$nilai->prodi}}</option>
        @foreach($mk as $m)
        <option value="{{$m->id}}" >{{$m->id}} | {{$m->prodi}} prodi:{{$m->prodi}}</option>
        @endforeach
      </select>

      <label @error('nama_mk') 
      class="text-danger" 
      @enderror>Nama Mata Kuliah @error('nama_mk') |
      {{ $message }} 
      @enderror</label>
      <select class="form-control form-control-sm" name="id_mk" id="nama">
        <option value="{{$nilai->id_mk}}">{{$nilai->nama_mk}}</option>
        @foreach($mk as $m)
        <option value="{{$m->id}}" >{{$m->id}} | {{$m->nama_mk}} prodi:{{$m->prodi}}</option>
        @endforeach
      </select>
      
      <label @error('nilai') 
      class="text-danger" 
      @enderror>Nilai @error('nilai') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="nilai" class="form-control" value="{{$nilai->nilai}}">
          @endforeach      
    </div>
  </div>
</div>
            <a class="btn btn-secondary" href=" " role="button">Close</a>
            <button type="submit" class="btn btn-primary btn-update">Simpan</button>
        </form>
    </div>

@endsection
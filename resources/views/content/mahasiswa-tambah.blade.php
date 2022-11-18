@extends('layout.master')

@section('judul')
<title>Mahasiswa</title>
@endsection

@section('data')
<h1>Data Mahasiswa</h1>
@endsection

@section('menu')
<li class=""><a class="nav-link" href="{{ route('Home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class="active"><a class="nav-link" href="{{ route('mahasiswa')}}"><i class="fas fa-graduation-cap"></i> <span>Data Mahasiswa</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mk')}}"><i class="fas fa-book"></i> <span>Data Mata Kuliah</span></a></li>
<li class=""><a class="nav-link" href="{{ route('nilai')}}"><i class="fas fa-address-book"></i> <span>Data Nilai</span></a></li>
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

<form action="{{route('postmahasiswa')}}" method="post" id="form-tambah">
          @csrf
<div class="row"> 
  <div class="col-md-12">
    <input type="hidden" name="id" value=" " id="id_data">
    <div class="form-group">

      <label @error('nama') 
      class="text-danger" 
      @enderror>Nama Mahasiswa @error('nama') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="nama" class="form-control">
      
      <label @error('npm') 
      class="text-danger" 
      @enderror>NPM @error('npm') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="npm" class="form-control">
      
      <label @error('alamat') 
      class="text-danger" 
      @enderror>Alamat @error('alamat') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="alamat" class="form-control">
      
      <label @error('jk') 
      class="text-danger" 
      @enderror>Jenis Kelamin @error('jk') |
      {{ $message }} 
      @enderror</label>
      {{-- <input type="text" name="jk" class="form-control"> --}}
      <select class="form-control form-control-sm" name="jk" id="">
        <option >Pilih Jenis Kelamin</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
      </select>
      
      <label @error('tempat_lahir') 
      class="text-danger" 
      @enderror>Tempat Lahir @error('tempat_lahir') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="tempat_lahir" class="form-control">
      
      <label @error('tanggal_lahir') 
      class="text-danger" 
      @enderror>Tanggal Lahir @error('tgl_lahir') |
      {{ $message }} 
      @enderror</label>
      <input type="date" name="tgl_lahir" class="form-control">
      
      <label @error('semester') 
      class="text-danger" 
      @enderror>Semester @error('semester') |
      {{ $message }} 
      @enderror</label>
      <input type="number" name="semester" class="form-control">
      
      <label @error('status_perkawinan') 
      class="text-danger" 
      @enderror>Status Perkawinan @error('status_perkawinan') |
      {{ $message }} 
      @enderror</label>
      <select class="form-control form-control-sm" name="status_perkawinan" id="">
        <option >Pilih Status Perkawinan</option>
        <option value="Sudah">Sudah Menikah</option>
        <option value="Belum">Belum Menikah</option>
      </select>
      {{-- <input type="text" name="status_perkawinan" class="form-control"> --}}
      
      
      <label @error('ipk') 
      class="text-danger" 
      @enderror>IPK @error('ipk') |
      {{ $message }} 
      @enderror</label>
      <input type="number" step=0.001 name="ipk" class="form-control">
      
      <label @error('penghasilan') 
      class="text-danger" 
      @enderror>Penghasilan @error('penghasilan') |
      {{ $message }} 
      @enderror</label>
      <input type="number" name="penghasilan" class="form-control">
      
      <label @error('email') 
      class="text-danger" 
      @enderror>Email @error('email') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="email" class="form-control">
      
    </div>
  </div>
</div>
            <a class="btn btn-secondary" href=" " role="button">Close</a>
            <button type="submit" class="btn btn-primary btn-update">Simpan</button>
        </form>
    </div>

@endsection
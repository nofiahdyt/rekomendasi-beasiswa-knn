@extends('layout.master')

@section('judul')
<title>Training</title>
@endsection

@section('data')
<h1>Data Training</h1>
@endsection

@section('menu')
<li class=""><a class="nav-link" href="{{ route('Home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mahasiswa')}}"><i class="fas fa-graduation-cap"></i> <span>Data Mahasiswa</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mk')}}"><i class="fas fa-book"></i> <span>Data Mata Kuliah</span></a></li>
<li class=""><a class="nav-link" href="{{ route('nilai')}}"><i class="fas fa-address-book"></i> <span>Data Nilai</span></a></li>
<li class=""><a class="nav-link" href="#"><i class="fas fa-check"></i> <span>Rekomendasi</span></a></li>
<li class="active"><a class="nav-link" href="{{ route('testing')}}"><i class="fas fa-check"></i> <span>Testing</span></a></li>
<li class=""><a class="nav-link" href="{{ route('training')}}"><i class="fas fa-check"></i> <span>Training</span></a></li>
@endsection

@section('content')
<div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        FORM EDIT DATA
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

<form action=" {{route('postupdatetesting', $tr->id)}} " method="post" id="form-edit">
@csrf
<div class="row"> 
  <div class="col-md-12">
    <input type="hidden" name="id" value=" {{ $tr->id }} " id="id_data">
    <div class="form-group">

      <label @error('nama') 
      class="text-danger" 
      @enderror>Nama Mahasiswa @error('nama') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="nama" value=" {{ $tr->nama }}" class="form-control">

      <label @error('ipk') 
      class="text-danger" 
      @enderror>IPK @error('ipk') |
      {{ $message }} 
      @enderror</label>
      <input type="number" name="ipk" value=" {{ $tr->ipk }}" class="form-control">

      <label @error('penghasilan') 
      class="text-danger" 
      @enderror>Penghasilan @error('penghasilan') |
      {{ $message }} 
      @enderror</label>
      <input type="number" name="penghasilan" value=" {{ $tr->penghasilan }}" class="form-control">    

      <label @error('smt') 
      class="text-danger" 
      @enderror>Semester @error('smt') |
      {{ $message }} 
      @enderror</label>
      <input type="number" name="smt" value=" {{ $tr->smt }}" class="form-control">    

      <label @error('status') 
      class="text-danger" 
      @enderror>Status Perkawinan @error('status') |
      {{ $message }} 
      @enderror</label>
      {{-- <input type="number" name="status" value=" {{ $tr->status }}" class="form-control">     --}}
      <select class="form-control form-control-sm" name="status" value=" " id="">
        <option value="{{ $tr->status }}">{{ $tr->status }}</option>
        <option value="Sudah">Sudah Menikah</option>
        <option value="Belum">Belum Menikah</option>
      </select>

      <label @error('label') 
      class="text-danger" 
      @enderror>Label @error('label') |
      {{ $message }} 
      @enderror</label>
      {{-- <input type="number" name="label" value=" {{ $tr->label }}" class="form-control">     --}}
      <select class="form-control form-control-sm" name="label" value=" " id="">
        <option value="{{ $tr->label }}">{{ $tr->label }}</option>
        <option value="Y">Direkomendasikan</option>
        <option value="T">Tidak Direkomendasikan</option>
      </select>

    </div>
  </div>
</div>
            <a class="btn btn-secondary" href="{{route('training')}}" role="button">Close</a>
            <button type="submit" class="btn btn-primary btn-update">Simpan</button>
        </form>
@endsection
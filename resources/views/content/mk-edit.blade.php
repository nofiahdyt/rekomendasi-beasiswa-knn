@extends('layout.master')

@section('judul')
<title>Mata Kuliah</title>
@endsection

@section('data')
<h1>Data Mata Kuliah</h1>
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
<form action=" {{route('postupdatemk',$mk->id)}} " method="post" id="form-edit">
          @csrf
<div class="row"> 
  <div class="col-md-12">
    <input type="hidden" name="id" value=" {{ $mk->id }} " id="id_data">
    <div class="form-group">

      <label @error('prodi') 
      class="text-danger" 
      @enderror>Program Studi @error('prodi') |
      {{ $message }} 
      @enderror</label>
      <select class="form-control form-control-sm" name="prodi" value=" {{ $mk->prodi }}" id="">
        <option >Pilih Program Studi</option>
        <option value="PIAUD">PIAUD</option>
        <option value="MPI">MPI</option>
      </select>

      <label @error('nama_mk') 
      class="text-danger" 
      @enderror>Nama Mata Kuliah @error('nama_mk') |
      {{ $message }} 
      @enderror</label>
      <input type="text" name="nama_mk" value=" {{ $mk->nama_mk }}" class="form-control">

      <label @error('sks') 
      class="text-danger" 
      @enderror>SKS @error('sks') |
      {{ $message }} 
      @enderror</label>
      <input type="number" name="sks" value=" {{ $mk->sks }}" class="form-control">    
      
    </div>
  </div>
</div>
            <a class="btn btn-secondary" href="{{route('mk')}}" role="button">Close</a>
            <button type="submit" class="btn btn-primary btn-update">Simpan</button>
        </form>
@endsection
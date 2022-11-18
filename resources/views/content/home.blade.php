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
<li class=""><a class="nav-link" href="{{ route('training')}}"><i class="fas fa-check"></i> <span>Training</span></a></li>
@endsection

@section('content')
<div class="section-body">
    <div class="row">
    	<div class="col-12 col-md-12 col-lg-12">
          {{-- <a href =" {{route ('createmk')}} " class="btn btn-primary" data-target="form-tambah">Tambah Data</a> --}}
    		
    		<hr>
        {{-- @if (session('message'))
          <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>×</span>
              </button>
              {{ session('message') }}
            </div>
          </div>
        @endif --}}
    		<table class="table table-striped table-bordered table-sm">
    			<tr>
    				<th>No</th>
    				<th>Program Studi</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
    				<th>Action</th>
    			</tr>
    			{{-- @foreach ($mk as $no => $mk)
    				<tr>
    					<td>{{ $no+1 }}</td>
                        <td>{{ $mk->prodi }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
    					<td>
                          <a href="{{route('updatemk',$mk->id)}}"  class="badge badge-success btn-edit">Edit</a>
                          <a href="{{route('deletemk',$mk->id)}}" class="badge badge-danger btn-edit">Hapus</a>     
                              @csrf
                              @method('delete')
                            </form>
                        </a>
                      </td>
                    </tr>
    			@endforeach --}}
    		</table>
    		
    	</div>
    </div>
</div>
@endsection
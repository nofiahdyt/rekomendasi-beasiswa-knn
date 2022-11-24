@extends('layout.master')

@section('judul')
<title>Testing</title>
@endsection

@section('data')
<h1>Data Testing</h1>
@endsection

@section('menu')
<li class=""><a class="nav-link" href="{{ route('Home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mahasiswa')}}"><i class="fas fa-graduation-cap"></i> <span>Data Mahasiswa</span></a></li>
<li class=""><a class="nav-link" href="{{ route('mk')}}"><i class="fas fa-book"></i> <span>Data Mata Kuliah</span></a></li>
<li class=""><a class="nav-link" href="{{ route('nilai')}}"><i class="fas fa-address-book"></i> <span>Data Nilai</span></a></li>
<li class=""><a class="nav-link" href="#"><i class="fas fa-check"></i> <span>Rekomendasi</span></a></li>
<li class="active"><a class="nav-link" href=""><i class="fas fa-check"></i> <span>Testing</span></a></li>
<li class=""><a class="nav-link" href="{{ route('training')}}"><i class="fas fa-check"></i> <span>Training</span></a></li>
@endsection

@section('content')
<div class="section-body">
    <div class="row">
    	<div class="col-12 col-md-12 col-lg-12">
        <a href =" {{route ('createtesting')}} " class="btn btn-primary" data-target="form-tambah">Tambah Data</a>
    		
    		
    		
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
            <th>Nama Mahasiswa</th>
            <th>IPK</th>
    				<th>Penghasilan</th>
            <th>Semester</th>
            <th>Status Perkawinan</th>
            <th>Nilai</th>
            <th>Rank</th>
    				<th>Status</th>
    				<th>Action</th>
    			</tr>
    			@foreach ($testing as $no => $tes)
    				<tr>
    					<td>{{ $no+1 }}</td>
              <td>{{ $tes->nama }}</td>
              <td>{{ $tes->ipk }}</td>
              <td>{{ $tes->pengasilan }}</td>
              <td>{{ $tes->smt }}</td>
              <td>{{ $tes->status }}</td>
              <td>{{ $tes->label }}</td>
              <td>{{$no+1}}</td>
              <td>{{$tes->hasil}}</td>
    					<td>
                <a href="{{route('updatetesting', $tes->id)}}"  class="badge badge-success btn-edit">Edit</a>
                <a href="{{route('deletetesting', $tes->id)}}" class="badge badge-danger btn-edit">Hapus</a>     
                @csrf
                @method('delete')
              </form>
              </a>
              </td>
            </tr>
    			@endforeach
    		</table>    		
    	</div>
    </div>
</div>
@endsection

@push('after-script')
<script>
  $(".swal-confirm").click(function(e) {
  	id = e.target.dataset.id;
    swal({
        title: 'Yakin Menghapus Data? ',
        text: 'Data yang sudah dihapus tidak bisa dikembalikan',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $(`#delete${id}`).submit();
        } else {
        }
      });
  });

  @if($errors->any())
    $('#exampleModal').modal('show')
  @endif

  $('.btn-edit').on('click', function(){
    // console.log($(this).data('id'))

    let id = $(this).data('id')
    $.ajax({
      url:`/mahasiswa/${id}/edit`,
      method:"GET",
      success: function(data) {
        // console.log(data)
        $('#modal-edit').find('.modal-body').html(data)
        $('#modal-edit').modal('show')
      },
      // error: function(data) {
      //   console.log(error)
      // }
    })
  })

  $('.btn-update').on('click', function(){
    // console.log($(this).data('id'))

    let id = $('#form-edit').find('#id_data').val()
    let formData = $('#form-edit').serialize()
    // console.log(formData)
    $.ajax({
      url:`/content/mahasiswa/${id}`,
      method:"PATCH",
      data:formData,
      success: function(data) {
        // console.log(data)
        // $('#modal-edit').find('.modal-body').html(data)
        $('#modal-edit').modal('hide')
        window.location.assign('/content/mahasiswa')
      },
      error: function(err) {
        console.log(err.responseJSON)
        let err_log = err.responseJSON.errors;
        if (err.status == 422){
          if(typeof(err_log.nama) !== 'undefined'){
             $('#modal-edit').find('[name = "nama"]').prev().html('<span style="color:red">Nama Mahasiswa | '+err_log.nama[0]+'</span>')
          } else {
            $('#modal-edit').find('[name = "nama"]').prev().html('<span>Nama Mahasiswa</span>')
          }
        }
      }
    })
  })
</script>
@endpush
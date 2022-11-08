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
          <a href =" {{route ('createmk')}} " class="btn btn-primary" data-target="form-tambah">Tambah Data</a>
    		
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
    			@foreach ($mk as $no => $mk)
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
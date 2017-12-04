<head>
  @include('dashboard.header')
</head>

<body>
  @include('dashboard.sidebar')
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
   
  		<div class="container-fluid">
       @if(Auth::user()->type_id == 2)
  			<h3 class="page-title">Detail Data Kelompok</h3>
          <div class="row">
            <div class="col-md-12">
              @if($punyaKelompok == 0)
                <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modalBuatKelompok">Buat Kelompok</button>
              @endif
              @if($punyaIde == 0)
                <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modaTambahIde">Tambah Ide Bisnis</button>
              @else
                <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modalEditIde">Edit Ide Bisnis</button>
                <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modalRiwayatMentoring">Tambahkan Riwayat Mentoring</button>
              @endif
            </div>
          </div>    
        <br>
          <div class="row">

  						<div class="col-md-12">
  							<!-- PANEL HEADLINE -->
  							<div class="panel panel-headline">
  								<div class="panel-heading">
                    @if($punyaKelompok == 1)
  									<h1 class="panel-title">{{$kelompok->team_name}}</h1>
                    <p>{{$kelompok->description}}</p>
                    @else
                    <h1>Anda Belum Punya Kelompok</h1>
                    @endif
  								</div>

                  <div class="panel-body">
                    @if($punyaKelompok == 1)
                      @if($punyaIde == 1)
                        <h3>{{$ideKelompok->idea_name}}</h3>
                        <p>{{$ideKelompok->idea_description}}</p>
                      @else
                        <p>Anda belum mempunyai ide bisnis. Silahkan tambahkan ide bisnis baru untuk dikembangkan.</p>
                      @endif
                    @else
                      <p>Daftarkan kelompok Anda terlebih dahulu untuk memberikan deskripsi ide bisnis Anda.</p>
                    @endif
                  </div>
  							</div>
  							<!-- END PANEL HEADLINE -->
  						</div>
            </div>
          <div class="row">
            <div class="col-md-12">
              <form class="form-inline" action="{{route('tambahkanAnggotaKelompok')}}" method="post">
                <div class="form-group">
                  {{ csrf_field() }}
                  <label for="email">Email address: </label>
                  <input type="email" name="email" class="form-control">
                  <button type="submit" class="btn btn-success" name="button">Tambahkan anggota</button>
                </div>
              </form>
            </div>
          </div>
  		    <div class="row">
            @if($punyaKelompok == 1)
              @foreach($anggotaKelompok as $anggota)
                <div class="col-md-4">
                <!-- PANEL WITH FOOTER -->
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">{{$anggota->first_name}}{{" "}}{{$anggota->last_name}}</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p>
                      {{$anggota->email}}
                      <br>
                      {{$anggota->phone_number}}
                    </p>
                  </div>
                  <div class="panel-footer">
                    <h5></h5>
                  </div>
                </div>
                <!-- END PANEL WITH FOOTER -->
              </div>
              @endforeach
            @endif
            </div>
            
            @else
            <h3 class="page-title">Daftar Kelompok Mentoring</h3>

          <div class="row">
            <!-- TABLE HOVER -->
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Daftar Mentoring</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Tim</th>
                        <th>Jumlah Mentoring</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $numbering = 1; ?>
                      @foreach($team as $key)
                      <tr>
                        <td>{{ $numbering }}</td>
                        <td>{{ $key->team_name }}</td>
                        <td>{{ $key->mentoring_count}}</td>
                        <td><a type="button" id="formMentoring" class="formMentoring btn btn-success" name="button" data-toggle="modal" data-target="#modalMentorForm" data-id="{{ $key->team_id }} ">Buka Form Mentoring</a></td>
                        <?php $numbering++ ?>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END TABLE HOVER -->
            </div>
          </div>
          @endif
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->
@if(Auth::user()->type_id == 2)
<!-- Modal -->
<div id="modalBuatKelompok" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Buat Kelompok</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{route('buatKelompok')}}" method="post">
          <div class="form-group">
            {{ csrf_field() }}
            <label class="control-label col-sm-2">Nama Kelompok</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="team_name" placeholder="Nama Kelompok Anda...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Deskripsi</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="description" placeholder="Masukkan Deskripsi Kelompok Anda..."></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Pilihan Paket</label>
            <div class="col-sm-10">
              <select name="package_id" class="form-control">
                @foreach($jenisPaket as $paket)
                  <option value="{{$paket->package_id}}">{{$paket->package_name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="modalTambahIde" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Ide Bisnis</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="{{route('tambahIdeBisnis')}}" method="post">
              <div class="form-group">
                {{ csrf_field() }}
                <label class="control-label col-sm-2">Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="idea_name" placeholder="Masukkan judul ide bisnis...">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="idea_description" placeholder="Masukkan Deskripsi ide bisnis..."></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Kategori</label>
                <div class="col-sm-10">

                  <select class="form-control" name="category_id">
                    @foreach($jenisKategori as $kategori)
                      <option value="{{$kategori->category_id}}">{{$kategori->category_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
@if($punyaIde == 1)
<div id="modalEditIde" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Ide Bisnis</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="{{URL('')}}/editidebisnis/{{$ideKelompok->idea_id}}" method="post">
              <div class="form-group">
                {{ csrf_field() }}
                <label class="control-label col-sm-2">Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="idea_name" value="{{$ideKelompok->idea_name}}" placeholder="Masukkan judul ide bisnis...">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="idea_description" placeholder="Masukkan Deskripsi ide bisnis...">{{$ideKelompok->idea_description}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Kategori</label>
                <div class="col-sm-10">

                  <select class="form-control" name="category_id">
                    @foreach($jenisKategori as $kategori)
                      <option value="{{$kategori->category_id}}" {{$ideKelompok->category_id == $kategori->category_id ? "selected" : ""}}>{{$kategori->category_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>


<!-- Riwayat Mentoring Modal -->

<div id="modalRiwayatMentoring" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Riwayat Mentoring</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="{{Route('setmentoring') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" value="{{ $ideKelompok->team_id }}" name="team_id">
              <input type="hidden" value="{{ Auth::user()->user_id }}" name="filled_by">
               <input type="hidden" value="{{ Auth::user()->type_id }}" name="type_id">
              @if (Auth::user()->type_id == 1)
             
                <input type="hidden" value="{{ Auth::user()->user_id }}" name="mentor_id">
              @else
                <input type="hidden" value="{{ $kelompok->mentor_id }}" name="mentor_id">
              @endif


                {{ csrf_field() }}
                
              <div class="form-group">
                <label class="control-label col-sm-2">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="mentoring_description" placeholder="Masukkan Deskripsi Mentoring..."></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" name="date">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2">Waktu Mulai</label>
                <div class="col-sm-10">
                  <input type="time" name="time_start">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2">Waktu Selesai</label>
                <div class="col-sm-10">
                  <input type="time" name="time_end">
                </div>
              </div>

               <div class="form-group">
                  <label  class="control-label col-sm-2">Upload Foto Mentoring</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="mentoring_photo" >
                  </div>
                </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>

@endif
@else
<div id="modalMentorForm" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Riwayat Mentoring</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="{{Route('setmentoring') }}" method="post" enctype="multipart/form-data">
              <input id="team_id" type="hidden" name="team_id">
              <input type="hidden" value="{{ Auth::user()->user_id }}" name="filled_by">
               <input type="hidden" value="{{ Auth::user()->type_id }}" name="type_id">
              @if (Auth::user()->type_id == 1)
             
                <input type="hidden" value="{{ Auth::user()->user_id }}" name="mentor_id">
              @else
                <input type="hidden" value="{{ Auth::user()->user_id }}" name="mentor_id">
              @endif


                {{ csrf_field() }}
                
              <div class="form-group">
                <label class="control-label col-sm-2">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="mentoring_description" placeholder="Masukkan Deskripsi Mentoring..."></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" name="date">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-2">Waktu Mulai</label>
                <div class="col-sm-10">
                  <input type="time" name="time_start">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2">Waktu Selesai</label>
                <div class="col-sm-10">
                  <input type="time" name="time_end">
                </div>
              </div>

               <div class="form-group">
                  <label  class="control-label col-sm-2">Upload Foto Mentoring</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="mentoring_photo" >
                  </div>
                </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
$(document).on("click", ".formMentoring", function () {
     var temp = $(this).data('id');
     console.log(temp);
     $("#modalMentorForm #team_id").val( temp );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>

@endif
<div class="clearfix"></div>
@include('dashboard.footer')

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
  			<h3 class="page-title">Detail Data Kelompok</h3>
          <div class="row">
            <div class="col-md-12">
              @if($punyaKelompok == 0)
                <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modalBuatKelompok">Buat Kelompok</button>
              @endif
              @if($punyaIde == 0)
                <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#myModal">Tambah Ide Bisnis</button>
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
                  <input type="email" class="form-control">
                  <button type="submit" class="btn btn-success" name="button">Tambahkan anggota</button>
                </div>
              </form>
            </div>
          </div>
  		    <div class="row">
            <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Nama Anggota 1</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
                </div>
                <div class="panel-footer">
                  <h5>No.Hp</h5>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>
            <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Nama Anggota 2</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
                </div>
                <div class="panel-footer">
                  <h5>No.Hp</h5>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>
            <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Nama Anggota 3</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                  <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
                </div>
                <div class="panel-footer">
                  <h5>No.Hp</h5>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->

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
<div id="myModal" class="modal fade" role="dialog">
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
                </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>
@include('dashboard.footer')

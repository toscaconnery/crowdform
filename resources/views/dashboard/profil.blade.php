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
  			<h3 class="page-title">Profil Pengguna</h3>
        <div class="row">
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Profil</h3>
									<p class="panel-subtitle">Halaman mengelola profil</p>
								</div>
								<div class="panel-body">
									<button type="submit" data-toggle="modal" data-target="#BiodataModal">Tambah Biodata</button>
									</form>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->


<div class="clearfix"></div>
@include('dashboard.footer')


<!-- Modal Biodata -->
<div class="modal fade" id="BiodataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Biodata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('biodata.set')}}">
          {{ csrf_field() }}
          	<div class="form-group row">
              <label  class="col-sm-4 col-form-label">Dosen di Jurusan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="major" placeholder="Masukkan Dosen Pengajar...">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Gelar S1</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="s1" placeholder="Masukkan Gelar s1...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Tahun Lulus S1</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="s1_year" placeholder="Masukkan tahun lulus s1...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Gelar S2</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="s2" placeholder="Masukkan Gelar S2...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Tahun Lulus S2</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="s2_year" placeholder="Masukkan Tahun S2...">
              </div>
            </div>
            <div class="form-group row">
               <label class="col-sm-4 col-form-label">Gelar S3</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="s3" placeholder="Masukkan Email...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Tahun Lulus S3</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="s3_year" placeholder="Masukkan Password...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Keahlian</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="specialities" placeholder="Masukkan Keahlian...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Bidang Minat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="interest" placeholder="Masukkan Keahlian...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Hobby</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="hobby" placeholder="Masukkan Hobby...">
              </div>
            </div>
            <input type="hidden" name="user_id" value="{{Auth::user()->user_id }}">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Tambah</button>
           </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal biodata-->

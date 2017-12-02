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
          <div class="col-md-4">
            <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#myModal">Tambah Ide Bisnis</button><br>
          </div>
        </div><br>
        <div class="row">
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Nama Kelompok</h3>
									<p class="panel-subtitle">Deskripsi Singkat Kelompok</p>
								</div>
								<div class="panel-body">
									<h4>Deskripsi Bisnis Kelompok</h4>
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <form class="form-inline" action="" method="post">
                <div class="form-group">
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Ide Bisnis</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2">Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="judul" placeholder="Masukkan judul ide bisnis...">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi ide bisnis..."></textarea>
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

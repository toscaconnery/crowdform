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
  			<h3 class="page-title">Daftar Mentor Bisnis</h3>
        <div class="row">
          <div class="col-md-4">
            <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#myModal">Tambah Data Mentor</button><br>
          </div>
        </div><br>
  		    <div class="row">
            <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Nama Mentor</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                	<img src="{{URL('')}}/dashboard/img/user-medium.png" class="img-circle" style="margin-left:6em" alt="Avatar">
                  <p style="text-align:center">Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
                </div>
                <div class="panel-footer">
                  <h5>Rating Mentor</h5>
                  <button type="button" class="btn btn-primary" name="button">Pilih Mentor</button>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>
            <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Nama Mentor</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                	<img src="{{URL('')}}/dashboard/img/user-medium.png" class="img-circle" style="margin-left:6em" alt="Avatar">
                  <p style="text-align:center">Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
                </div>
                <div class="panel-footer">
                  <h5>Rating Mentor</h5>
                  <button type="button" class="btn btn-primary" name="button">Pilih Mentor</button>
                </div>
              </div>
              <!-- END PANEL WITH FOOTER -->
            </div>
            <div class="col-md-4">
              <!-- PANEL WITH FOOTER -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Nama Mentor</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  </div>
                </div>
                <div class="panel-body">
                	<img src="{{URL('')}}/dashboard/img/user-medium.png" class="img-circle" style="margin-left:6em" alt="Avatar">
                  <p style="text-align:center">Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
                </div>
                <div class="panel-footer">
                  <h5>Rating Mentor</h5>
                  <button type="button" class="btn btn-primary" name="button">Pilih Mentor</button>
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
        <h4 class="modal-title">Tambah Data Mentor</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2">Nama Mentor</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Mentor...">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">No.Hp</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="hp" placeholder="Masukkan No.hp...">
                </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>
@include('dashboard.footer')

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
  			<h3 class="page-title">Data Kelompok</h3>
        <div class="row">
          <div class="col-md-4">
            <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#myModal">Tambah data Kelompok</button><br>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-12">
            <!-- TABLE STRIPED -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Data Kelompok</h3>
          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelompok</th>
                  <th>Deskripsi</th>
                  <th>Jumlah Anggota</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Kelompok 1</td>
                  <td>qwertyuioasdsadhjs</td>
                  <td>2</td>
                  <td><button type="button" class="btn btn-info" name="button">Detail Kelompok</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Kelompok 2</td>
                  <td>qwertyuioasdsadhjs</td>
                  <td>3</td>
                  <td><button type="button" class="btn btn-info" name="button">Detail Kelompok</button></td>  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- END TABLE STRIPED -->
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
        <h4 class="modal-title">Tambah Data Kelompok</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2">Nama Kelompok</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="judul" placeholder="Masukkan nama kelompok...">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Kelompok..."></textarea>
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

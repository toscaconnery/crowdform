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
  			<h3 class="page-title">Kotak Masuk</h3>
  		    <div class="row">
            <!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Kotak Masuk</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>No</th>
												<th>Pengirim</th>
												<th>Judul</th>
												<th>Waktu Pengiriman pesan</th>
                        <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Tes Pesan</td>
												<td>Selasa / 04 Desember 2017</td>
                        <td>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPesan">Detail Pesan</button>
                          <button type="button" class="btn btn-danger">Hapus Pesan</button>
                        </td>
                      </tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Tes Pesan</td>
												<td>Selasa / 04 Desember 2017</td>
                        <td>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPesan">Detail Pesan</button>
                          <button type="button" class="btn btn-danger">Hapus Pesan</button>
                        </td>
                      </tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->

<!-- Modal -->
<div id="ModalPesan" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Pesan</h4>
      </div>
   <form class="form-horizontal" action="{{ route('kirimPesan') }}" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-sm-2">Pengirim</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="destination" value="Nama Pengirim">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Subjek</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="subject" value="Subjek">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Pesan</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="message" value="isi pesan"></textarea>
          </div>
        </div>
      </div>
    </form>
      <div class="modal-footer">
        <button type="submit" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>
@include('dashboard.footer')

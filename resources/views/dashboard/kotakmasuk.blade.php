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
                      @php
                        $x = 1;
                      @endphp
                      @foreach($listInbox as $listInbox)
                        <tr>
                          <td>{{$x++}}</td>
                          <td>{{Auth::user()->type_id == 1 ? $tim[$listInbox->team_id] : "Mentor"}}</td>
                          <td>{{$listInbox->subject}}</td>
                          {{-- <td>Selasa / 04 Desember 2017</td> --}}
                          <td>{{$listInbox->created_at}}</td>
                          <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPesan{{$listInbox->message_id}}">Baca Pesan</button>
                            <button type="button" class="btn btn-danger">Hapus Pesan</button>
                          </td>
                        </tr>
                      @endforeach
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

@foreach($inbox as $inbox)
<!-- Modal -->
<div id="ModalPesan{{$inbox->message_id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pesan</h4>
      </div>
   <form class="form-horizontal" action="" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-sm-2">Pengirim</label>
          <div class="col-sm-10">
            <input disabled="" type="text" class="form-control" name="destination" value="{{Auth::user()->type_id == 1 ? $tim[$inbox->team_id] : "Mentor"}}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Subjek</label>
          <div class="col-sm-10">
            <input disabled="" type="text" class="form-control" name="subject" value="{{$inbox->subject}}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Pesan</label>
          <div class="col-sm-10">
            <textarea disabled="" class="form-control" name="message">{{$inbox->message}}</textarea>
          </div>
        </div>
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach

<div class="clearfix"></div>
@include('dashboard.footer')

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
        @if($punyaKelompok == 0)
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Anda Belum Punya Kelompok</h3>
          </div>
          <div class="panel-body">
            Silahkan menambahkan sebuah tim untuk bisa mendaftarkan ide.
          </div>
        </div>
        @else
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Data Kelompok</h3>
          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nama Kelompok</th>
                  <th>Jumlah Anggota</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              @php
                $x = 1;
              @endphp
              <tbody>
                <tr>
                  <td>{{$x++}}</td>
                  {{dd($kelompok)}}
                  <td>{{$kelompok->team_name}}</td>
                  <td>{{$kelompok->jumlah}}</td>
                  <td><a href="{{route('detaildatakelompok')}}"><button type="button" class="btn btn-info" name="button">Detail Kelompok</button></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        @endif
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
          <form class="form-horizontal" action="{{route('tambahKelompok')}}" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2">Nama Kelompok</label>
                <div class="col-sm-10">
                  {{ csrf_field() }}
                  <input type="text" class="form-control" name="team_name" placeholder="Masukkan nama kelompok...">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Paket Mentoring</label>
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

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
  			<h3 class="page-title">Daftar Riwayat Mentoring</h3>
          

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
                        <th>Tanggal Bimbingan</th>
                        <th>Deskripsi</th>
                        <th>Detail Bimbingan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Steve</td>
                        <td>Jobs</td>
                        <td>@steve</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Simon</td>
                        <td>Philips</td>
                        <td>@simon</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END TABLE HOVER -->
            </div>
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->
<div class="clearfix"></div>
@include('dashboard.footer')


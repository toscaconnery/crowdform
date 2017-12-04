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
                        <th>Tanggal Mentoring</th>
                        <th>Deskripsi</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
                        <th>Nama Tim</th>
                        <th>Nama Mentor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $numbering = 1; ?>
                      @foreach($mentoring as $mentor)
                      <tr>
                        <td>{{ $numbering }}</td>
                        <td>{{ $mentor->date }}</td>
                        <td>{{ $mentor->mentoring_description }}</td>
                        <td>{{ $mentor->time_start }}</td>
                        <td>{{ $mentor->time_end }}</td>
                        <td>{{ $mentor->team_name }}</td>
                        <td>{{ $mentor->first_name }}</td>
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
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->
<div class="clearfix"></div>
@include('dashboard.footer')


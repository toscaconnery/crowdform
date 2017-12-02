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
  					<div class="panel panel-profile">
  						<div class="clearfix">
  							<!-- LEFT COLUMN -->
  							<div class="profile-left">
  								<!-- PROFILE HEADER -->
  								<div class="profile-header">
  									<div class="overlay"></div>
  									<div class="profile-main">
  										<img src="{{URL('')}}/dashboard/img/user-medium.png" class="img-circle" alt="Avatar">
  										<h3 class="name">Samuel Gold</h3>
  										<span class="online-status status-available"></span>
  									</div>
  									<div class="profile-stat">
  										<div class="row">
  											<div class="col-md-4 stat-item">
  												45 <span>Projects</span>
  											</div>
  											<div class="col-md-4 stat-item">
  												15 <span>Awards</span>
  											</div>
  											<div class="col-md-4 stat-item">
  												2174 <span>Points</span>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- END PROFILE HEADER -->
  								<!-- PROFILE DETAIL -->
  								<div class="profile-detail">
  									<div class="profile-info">
  										<h4 class="heading">Biodata</h4>
  										<ul class="list-unstyled list-justify">
  											<li>Tempat & Tanggal Lahir <span>24 Aug, 2016</span></li>
  											<li>Handphone <span>(124) 823409234</span></li>
  											<li>Email <span>samuel@mydomain.com</span></li>
                        <li>Website <span>samuelmydomain.com</span></li>
  										</ul>
  									</div>
  								</div>
  								<!-- END PROFILE DETAIL -->
  							</div>
  							<!-- END LEFT COLUMN -->
  							<!-- RIGHT COLUMN -->
  							<div class="profile-right" style="padding-bottom:7em;">
  								<h4 class="heading">Samuel's Awards</h4>
  								<!-- AWARDS -->
  								<div class="awards">
  									<div class="row">
  										<div class="col-md-3 col-sm-6">
  											<div class="award-item">
  												<div class="hexagon">
  													<span class="lnr lnr-sun award-icon"></span>
  												</div>
  												<span>Most Bright Idea</span>
  											</div>
  										</div>
  										<div class="col-md-3 col-sm-6">
  											<div class="award-item">
  												<div class="hexagon">
  													<span class="lnr lnr-clock award-icon"></span>
  												</div>
  												<span>Most On-Time</span>
  											</div>
  										</div>
  										<div class="col-md-3 col-sm-6">
  											<div class="award-item">
  												<div class="hexagon">
  													<span class="lnr lnr-magic-wand award-icon"></span>
  												</div>
  												<span>Problem Solver</span>
  											</div>
  										</div>
  										<div class="col-md-3 col-sm-6">
  											<div class="award-item">
  												<div class="hexagon">
  													<span class="lnr lnr-heart award-icon"></span>
  												</div>
  												<span>Most Loved</span>
  											</div>
  										</div>
  									</div>
  									<div class="text-center"><a class="btn btn-info" data-toggle="modal" data-target="#ProfilModal">Edit Profile</a></div>
  								</div>
  								<!-- END AWARDS -->
  								<!-- TABBED CONTENT -->
  							</div>
  							<!-- END RIGHT COLUMN -->
  						</div>
  					</div>
  				</div>
  			</div>
  			<!-- END MAIN CONTENT -->
  		</div>
  		<!-- END MAIN -->

      <!-- Modal -->
      <div id="ProfilModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Data Profil</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="" >
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Depan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="first_name" placeholder="Masukkan nama depan...">
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-4 col-form-label">Nama Belakang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="last_name" placeholder="Masukkan nama belakang...">
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-4 col-form-label">No.HP</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" name="phone_number" placeholder="Masukkan No.Hp...">
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-4 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email...">
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-4 col-form-label">Upload Foto Profil</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" name="user_photo" >
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Register</button>
               </form>
            </div>
          </div>
        </div>
      </div>

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

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
      		<h3 class="page-title">Detail Biodata Mentor</h3>
  					<div class="panel panel-profile">
  						<div class="clearfix">
  							<!-- LEFT COLUMN -->
  							<div class="profile-left">
  								<!-- PROFILE HEADER -->
  								<div class="profile-header">
  									<div class="overlay"></div>
  									<div class="profile-main">
  										<img src="{{URL('')}}/{{$mentor->user_photo}}" width="120" height="120" class="img-circle" alt="Avatar">
  										<h3 class="name">{{$mentor->first_name}}{{" "}}{{$mentor->last_name}}</h3>
  										<span class="online-status status-available"></span>
  									</div>
  									<div class="profile-stat">
  										<div class="row">
  											<div class="col-md-4 stat-item">
  												{{$jumlahTim}} <span>Mentee</span>
  											</div>
  											<div class="col-md-4 stat-item">
  												{{$jumlahMengajar}} <span>Class</span>
  											</div>
  											<div class="col-md-4 stat-item">
  												{{$pendidikanTerakhir}} <span>Education</span>
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
  											<li>Handphone <span>{{$mentor->phone_number}}</span></li>
  											<li>Email <span>{{$mentor->email}}</span></li>
                        @if(isset($mentor->s1_year))
                          <li>S1 <span>{{$mentor->s1}}</span></li>
                          <li>S1 Year <span>{{$mentor->s1_year}}</span></li>
                        @endif
                        @if(isset($mentor->s2_year))
                          <li>S2 <span>{{$mentor->s2}}</span></li>
                          <li>S2 Year <span>{{$mentor->s2_year}}</span></li>
                        @endif
                        @if(isset($mentor->s3_year))
                          <li>S3 <span>{{$mentor->s3}}</span></li>
                          <li>S3 Year <span>{{$mentor->s3_year}}</span></li>
                        @endif
  										</ul>
  									</div>
  								</div>
  								<!-- END PROFILE DETAIL -->
  							</div>
  							<!-- END LEFT COLUMN -->
  							<!-- RIGHT COLUMN -->
  							{{-- <div class="profile-right" style="padding-bottom:7em;">
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
  								</div>
  								<!-- END AWARDS -->
  								<!-- TABBED CONTENT -->
  							</div> --}}
  							<!-- END RIGHT COLUMN -->
  						</div>
  					</div>
  				</div>
  			</div>
  			<!-- END MAIN CONTENT -->
  		</div>
  		<!-- END MAIN -->
<div class="clearfix"></div>
@include('dashboard.footer')

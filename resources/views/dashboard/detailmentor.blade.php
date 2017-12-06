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
<div class="clearfix"></div>
@include('dashboard.footer')

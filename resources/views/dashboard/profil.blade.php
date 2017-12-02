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
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Profil</h3>
									<p class="panel-subtitle">Halaman mengelola profil</p>
								</div>
								<div class="panel-body">
									<form class="" action="" method="post">
                    <p>Unggah foto profil anda</p>
                      <input type="file" id="file">
									</form>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->


<div class="clearfix"></div>
@include('dashboard.footer')

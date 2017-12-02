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
  			<h3 class="page-title">Pengaturan</h3>
  		    <div class="row">
            <div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Ganti Password</h3>
									<p class="panel-subtitle">Halaman ini digunakan untuk mengganti password</p>
								</div>
								<div class="panel-body">
                  <form class="form-inline" action="" method="post">
                     <div class="form-group">
                       <label for="pwdlama">Password Lama:</label>
                       <input type="password" class="form-control">
                     </div>
                     <div class="form-group">
                       <label for="pwdbaru">Password Baru:</label>
                       <input type="password" class="form-control">
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
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

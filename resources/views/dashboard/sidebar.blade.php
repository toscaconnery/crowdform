	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href=""><img src="{{URL('')}}/dashboard/img/logo-CrowdForm.png" alt="CrowdForm Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<!-- <div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div> -->
				@if(Auth::check())
					<div class="navbar-btn navbar-btn-right">
						<a class="btn btn-danger update-pro nav-link" href="{{ route('logout') }}"
							onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" >
                             <i class="lnr lnr-exit"></i>
                             <span>Keluar</span>
                        </a>
					</div>


                	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                	</form>
                @else
                	<div class="navbar-btn navbar-btn-right">
						<a class="btn btn-danger update-pro nav-link" data-toggle="modal" data-target="#LoginModal">
                             <i class="lnr lnr-exit"></i>
                             <span>Masuk</span>
                        </a>
					</div>
				@endif
				@if(Auth::check())
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="update-pro" title="Kirim Pesan" data-toggle="modal" data-target="#ChatModal"><i class="lnr lnr-bubble"></i><span>Kirim Pesan</span></a>
						</li>
						<li class="dropdown">
								@if(!isset($notifikasi))
									@php
										$jumlahNotifikasi = 0;
									@endphp
								@endif
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								@if($jumlahNotifikasi > 0)
									<span class="badge bg-danger">{{$jumlahNotifikasi}}</span>
								@else
									<span class="badge bg-success">{{$jumlahNotifikasi}}</span>
								@endif
							</a>
							<ul class="dropdown-menu notifications">
								@if($jumlahNotifikasi > 0)
									@foreach($notifikasi as $notifikasi)
										<li style="text-center">
											<a href="#" class="notification-item">
												<span class="dot bg-success">
												</span>
												@if($notifikasi[0] == "invitation")
													Anda diundang ke tim {{$notifikasi[1]}}.
													<a href="{{URL('')}}/masukKelompok/{{$notifikasi[2]}}"><button class="btn btn-success">Terima</button></a>
													<a href="{{URL('')}}/abaikanKelompok/{{$notifikasi[2]}}"><button class="btn btn-danger">Abaikan</button></a>
												@endif
											</a>
										</li>
									@endforeach
								@else
									<li><a href="#" class="more">Tidak ada notifikasi.</a></li>
								@endif
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{URL('')}}/dashboard/img/user.png" class="img-circle" alt="Avatar"> <span>{{Auth::user()->first_name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="{{URL('/profil')}}"><i class="lnr lnr-user"></i> <span>Profil</span></a></li>
								<li><a href="{{URL('/setting')}}"><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
				@endif
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{URL('dashboardhome')}}" class="active"><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
						<li><a href="{{URL('idebisnis')}}" class=""><i class="lnr lnr-rocket"></i> <span>Ide Bisnis</span></a></li>
						<li><a href="{{URL('daftarmentor')}}" class=""><i class="lnr lnr-user"></i> <span>Daftar Mentor</span></a></li>
						<li><a href="{{Route('getmentoring')}}" class=""><i class="lnr lnr-calendar-full"></i> <span>Riwayat Mentoring</span></a></li>
						
						@if(Auth::user()->type_id == 2)
						<li><a href="{{URL('detaildatakelompok')}}" class=""><i class="lnr lnr-list"></i> <span>Data Kelompok</span></a></li>
						@else
						<li><a href="{{URL('getlistteam')}}" class=""><i class="lnr lnr-list"></i> <span>Data Kelompok</span></a></li>
						@endif
						<!-- <li><a href="{{URL('statistik')}}" class=""><i class="lnr lnr-chart-bars"></i> <span>Statistik Mentoring</span></a></li> -->
						<!-- <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- Modal Login -->
		<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form method="POST" action="{{route('login')}}">
		        <div class="modal-body">
		          <div class="form-group row">
		            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		            <div class="col-sm-10">
		              <input type="email" class="form-control" name="email" placeholder="Email">
		              {{ csrf_field() }}
		            </div>
		          </div>
		          <div class="form-group row">
		            <label for="inputPassword3" class="col-sm-2 col-form-label">Kata Sandi</label>
		            <div class="col-sm-10">
		              <input type="password" class="form-control" name="password" placeholder="Kata Sandi">
		            </div>
		          </div>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-success">Masuk</button>
		        </div>
		      </form>
		    </div>
		  </div>
		</div>
		  <!-- /Modal login-->

			<!-- Modal Chat -->
			<div id="ChatModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Chat</h4>
			      </div>
			      <div class="modal-body">
			          <form class="form-horizontal" action="" method="post">
			              <div class="form-group">
			                <label class="control-label col-sm-2">Penerima</label>
			                <div class="col-sm-10">
			                  <input type="text" class="form-control" name="penerima" placeholder="Masukkan Penerima">
			                </div>
			              </div>
			              <div class="form-group">
			                <label class="control-label col-sm-2">Judul</label>
			                <div class="col-sm-10">
			                  <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
			                </div>
			              </div>
										<div class="form-group">
											<label class="control-label col-sm-2">Judul</label>
											<div class="col-sm-10">
												<textarea class="form-control" name="pesan" placeholder="Masukkan Pesan"></textarea>
											</div>
										</div>
			          </form>
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-success">Submit</button>
			      </div>
			    </div>
			  </div>
			</div>

	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="{{URL('')}}/dashboard/img/logo-CrowdForm.png" alt="CrowdForm Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				@if(Auth::check())
					<div class="navbar-btn navbar-btn-right">
						<a class="btn btn-danger update-pro nav-link" href="{{ route('logout') }}" 
							onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" >
                             <i class="lnr lnr-exit"></i>
                             <span>Logout</span>
                        </a>
					</div>


                	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                	</form>
                @else
                	<div class="navbar-btn navbar-btn-right">
						<a class="btn btn-danger update-pro nav-link">
                             <i class="lnr lnr-exit"></i>
                             <span>Login</span>
                        </a>
					</div>
				@endif
				@if(Auth::check())
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
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
{{-- 								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li> --}}
								@if($jumlahNotifikasi > 0)
									@foreach($notifikasi as $notifikasi)
										<li>
											<a href="#" class="notification-item">
												<span class="dot bg-success">
												</span>
												@if($notifikasi[0] == "invitation")
													Anda diundang ke tim {{$notifikasi[1]}}.
													<a href="{{URL('')}}/masukKelompok/{{$notifikasi[2]}}"><button class="btn btn-success">terima</button></a>
													<a href="{{URL('')}}/abaikanKelompok/{{$notifikasi[2]}}"><button class="btn btn-danger">abaikan</button></a>
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
								<li><a href="{{URL('/profil')}}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="{{URL('/setting')}}"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
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
						<li><a href="" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{URL('idebisnis')}}" class=""><i class="lnr lnr-rocket"></i> <span>Ide Bisnis</span></a></li>
						<li><a href="{{URL('daftarmentor')}}" class=""><i class="lnr lnr-user"></i> <span>Daftar Mentor</span></a></li>
						<li><a href="{{URL('daftarbimbingan')}}" class=""><i class="lnr lnr-calendar-full"></i> <span>Daftar Bimbingan</span></a></li>
						<li><a href="{{URL('datakelompok')}}" class=""><i class="lnr lnr-list"></i> <span>Data Kelompok</span></a></li>
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

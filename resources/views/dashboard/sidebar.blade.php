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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{URL('')}}/{{Auth::user()->user_photo}}" class="img-circle" alt="Avatar"> <span>{{Auth::user()->first_name}}</span>
							<i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<!-- <ul class="dropdown-menu">
								<li><a href="{{URL('/profil')}}"><i class="lnr lnr-user"></i> <span>Profil</span></a></li> -->
								<!-- <li><a href="{{URL('/setting')}}"><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li> -->
								<!-- </ul> -->
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
							<li>
								<a href="{{URL('dashboardhome')}}" class="active">
									<i class="lnr lnr-home"></i>
									<span>Beranda</span>
								</a>
							</li>
							<li>
								<a href="{{URL('idebisnis')}}" class="">
									<i class="lnr lnr-rocket"></i> 
									<span>Ide Bisnis</span>
								</a>
							</li>
							<li>
								<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Mentor</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages2" class="collapse ">
									<ul class="nav">
										<li><a href="{{URL('listmentor')}}" class=""><i class="lnr lnr-user"></i> <span>Daftar Mentor</span></a></li>
										<li><a href="{{URL('detailmentor')}}" class=""><i class="lnr lnr-eye"></i> <span>Detail Mentor</span></a></li>
									</ul>
								</div>
							</li>
							@if(Auth::check())
								<li>
									<a href="{{Route('getmentoring')}}" class="">
										<i class="lnr lnr-calendar-full"></i>
										<span>Riwayat Mentoring</span>
									</a>
								</li>
								<li>
									<a href="{{URL('kotakmasuk')}}" class="">
										<i class="lnr lnr-envelope"></i> 
										<span>Kotak Masuk</span>
									</a>
								</li>
							@endif

							@if(Auth::check())
								@if(Auth::user()->type_id == 2)		{{-- mahasiswa --}}
									<li><a href="{{URL('detaildatakelompok')}}" class=""><i class="lnr lnr-list"></i> <span>Data Kelompok</span></a></li>
								@elseif(Auth::user()->type_id == 1)      {{-- mentor --}}
									<li><a href="{{URL('getlistteam')}}" class=""><i class="lnr lnr-list"></i> <span>Data Kelompok</span></a></li>
								@endif
							@endif

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

		@if(Auth::check())
		<!-- Modal Chat -->
		<div id="ChatModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Kirim Pesan</h4>
					</div>
					<form class="form-horizontal" action="{{ route('kirimPesan') }}" method="post">
						<div class="modal-body">
							{{ csrf_field() }}
							<div class="form-group">
								<label class="control-label col-sm-2">Penerima</label>
								<div class="col-sm-10">
									<input {{Auth::user()->type_id == 2 ? 'Disabled' : ''}} type="text" class="form-control" placeholder="{{Auth::user()->type_id == 1 ? 'Masukkan nama tim' : ''}}" name="destination" value="{{Auth::user()->type_id == 2 ? 'Mentor' : ''}}">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Subjek</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="subject" placeholder="Apa yang ingin Anda bahas?">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Pesan</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="message" placeholder=""></textarea>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Kirim</button>
						</div>
					</form>

				</div>
			</div>
		</div>
		@endif

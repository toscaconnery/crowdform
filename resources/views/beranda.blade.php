@extends('header')

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">CrowdForm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{URL('')}}/Ide/DaftarIde">Daftar Ide</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#RegisterModal">Register</a>
            </li>
            @if(Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#LoginModal">Login</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>CrowdForm</h1>
          <h3>Connecting People</h3>
          <hr class="intro-divider">
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <section class="content-section-a">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Connecting Investors and Inovators :<br></h2>
            <p class="lead">Register your account immediately. Get the chance to meet the best experienced mentors on our system for your business success. By paying registration of Rp.5000 you can enjoy access to our system.</p>
          </div>
          <div class="col-lg-5 mr-auto">
            <img class="img-fluid" src="img/salaman.png" alt="">
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>

    <section class="content-section-b">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mr-auto order-lg-2">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Mentor</h2>
            <p class="lead">Someone who has the best experience in the business world. In our system there are many certified mentors</p>
          </div>
          <div class="col-lg-5 ml-auto order-lg-1">
            <img class="img-fluid" src="img/mentor.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.content-section-b -->
    <section class="content-section-a">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">College Student</h2>
            <p class="lead">Someone who has a business idea guided by a mentor. Make the business idea into a real business</p>
          </div>
          <div class="col-lg-5 mr-auto ">
            <img class="img-fluid" src="img/mahasiswa.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.content-section-a -->
    <!-- <aside class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 my-auto">
            <h2>Connect to Our Social Media</h2>
          </div>
          <div class="col-lg-6 my-auto">
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="#" class="btn btn-secondary btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-secondary btn-lg">
                  <i class="fa fa-facebook fa-fw"></i>
                  <span class="network-name">Facebook</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-secondary btn-lg">
                  <i class="fa fa-linkedin fa-fw"></i>
                  <span class="network-name">Linkedin</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.container -->
    <!-- </aside>  -->
    <!-- /.banner -->
<!-- Modal Login -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
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
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <!-- /Modal login-->

  <!-- Modal register -->
  <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('user.register')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
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
              <label  class="col-sm-4 col-form-label">Tipe</label>
              <div class="col-sm-8">
                <select class="custom-select" name="type_id">
                  <option value="1">Mentor</option>
                  <option value="2">Mahasiswa</option>
                  <!-- <option value="investor">Investor</option> -->
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password...">
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
    <!-- /Modal register-->

@include('footer')

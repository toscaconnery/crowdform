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
              <a class="nav-link" href="{{URL('')}}/Register/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
            </li>
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
          <ul class="list-inline intro-social-buttons">
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
    <aside class="banner">
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
    </aside>
    <!-- /.banner -->
    <!-- Modal Login -->

<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Halaman Login</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login')}}">
          {{ csrf_field() }}
          <label for="email">Email</label>
          <input type="email" name="email" >
          <br>
          <label for="password">Password</label>
          <input type="password" name="password">
          <br>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <!-- /Modal content-->
    @include('footer')

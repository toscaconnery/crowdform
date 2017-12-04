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
  			<h3 class="page-title">Selamat Datang {{Auth::user()->first_name}}</h3>
  		    <div class="row">
              <div class="col-md-12">
                <!-- PANEL WITH FOOTER -->
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">CrowdForm Platform | Anda memiliki akses sebagai {{$tipeUser->name}}</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                  </div>
                  <div class="panel-body">
                    Silahkan bersenang senang dengan platform kami, anda memiliki akses sebagai berikut :<br>
                    <h4><span class="label label-primary" style="margin-bottom:20px">Ide Bisnis</span></h4>
                    <h4><span class="label label-primary" style="margin-bottom:20px">Daftar Mentor</span></h4>
                    <h4><span class="label label-primary" style="margin-bottom:20px">Daftar Bimbingan</span></h4>
                    <h4><span class="label label-primary" style="margin-bottom:20px">Data Kelompok</span></h4>
                    <h4><span class="label label-primary" style="margin-bottom:20px">Statistika Mentoring</span></h4>
                  </div>
                  <div class="panel-footer">
                    <h5>CrowdForm Terdepan dalam menyukseskan bisnis anda</h5>
                  </div>
                </div>
                <!-- END PANEL WITH FOOTER -->
              </div>
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->

<div class="clearfix"></div>
@include('dashboard.footer')

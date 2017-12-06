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
  			<h3 class="page-title">Detail Ide</h3>
  		    <div class="row">
              <div class="col-md-12">
                <!-- PANEL WITH FOOTER -->
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">{{$detailIde->idea_name}}</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                  </div>
                  <div class="panel-body">
                    <h4>{{$detailIde->idea_description}}</h4>
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

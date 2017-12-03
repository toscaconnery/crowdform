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
  			<h3 class="page-title">Ide Bisnis</h3>
  		    <div class="row">
            @foreach($listIde as $ide)
              <div class="col-md-4">
                <!-- PANEL WITH FOOTER -->
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">{{$ide->idea_name}}</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p>{{$ide->idea_description}}</p>
                  </div>
                  <div class="panel-footer">
                    <h5>{{$ide->team_name}}</h5>
                  </div>
                </div>
                <!-- END PANEL WITH FOOTER -->
              </div>
            @endforeach
          </div>
        </div>
      </div>
  <!--/ MAIN CONTENT -->
</div>
<!--/ MAIN -->

<div class="clearfix"></div>
@include('dashboard.footer')

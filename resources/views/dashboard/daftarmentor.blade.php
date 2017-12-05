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
  			<h3 class="page-title">Daftar Mentor Bisnis</h3>
        <br>
  		    <div class="row">
            @foreach($listMentor as $mentor)
              <div class="col-md-4">
                <!-- PANEL WITH FOOTER -->
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">{{$mentor->first_name}}{{" "}}{{$mentor->last_name}}</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                  </div>
                  <div class="panel-body">
                    @if(isset($mentor->user_photo))
                  	 <img src="{{URL('')}}/{{$mentor->user_photo}}" width="100" height="100" class="img-circle" style="margin-left:6em" alt="Avatar">
                    @else
                      <img src="{{URL('')}}/img/no_profpic.png" width="100" height="100" class="img-circle" style="margin-left:6em" alt="Avatar">
                    @endif
                    <p style="text-align:center">Speciality:{{$mentor->specialities}}</p>
                  </div>
                  <div class="panel-footer">
                    <a href="{{URL('')}}/pilihmentortim/{{$mentor->user_id}}">
                      <button type="button" class="btn btn-primary" name="button">Pilih Mentor</button>
                    </a>
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

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
          @if(Auth::check())
            @if(Auth::user()->type_id == 1)
              <div class="text-left">
                <a class="btn btn-info" data-toggle="modal" data-target="#BiodataModal">Tambah Biodata</a>
              </div>
            @endif
          @endif
        <br>
         
  		    <div class="row">
            @foreach($listMentor as $mentor)
              <div class="col-md-4">
                <!-- PANEL WITH FOOTER -->
                <div class="panel">
                  <div class="panel-heading">
                    <a href="{{URL('')}}/detailmentor/{{$mentor->user_id}}">
                      <h3 class="panel-title">{{$mentor->first_name}}{{" "}}{{$mentor->last_name}}</h3>
                    </a>
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
                  @if(Auth::check())
                    @if(Auth::user()->type_id == 2)
                    <div class="panel-footer">
                      <a href="{{URL('')}}/pilihmentortim/{{$mentor->user_id}}">
                        <button type="button" {{$punyaMentor == 0 && isset(Auth::user()->team_id) ? '' : 'disabled=""' }} class="btn btn-primary" name="button">Pilih Mentor</button>
                      </a>
                    </div>
                    @endif
                  @endif
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


@if(Auth::check())
<!-- Modal Biodata -->
<div class="modal fade" id="BiodataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Biodata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('biodata.set')}}">
          {{ csrf_field() }}
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Dosen di Jurusan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="major" placeholder="Masukkan Dosen Pengajar...">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Gelar S1</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="s1" placeholder="Masukkan Gelar s1...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Tahun Lulus S1</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="s1_year" placeholder="Masukkan tahun lulus s1...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Gelar S2</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="s2" placeholder="Masukkan Gelar S2...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Tahun Lulus S2</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="s2_year" placeholder="Masukkan Tahun S2...">
              </div>
            </div>
            <div class="form-group row">
               <label class="col-sm-4 col-form-label">Gelar S3</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="s3" placeholder="Masukkan Email...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Tahun Lulus S3</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="s3_year" placeholder="Masukkan Password...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Keahlian</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="specialities" placeholder="Masukkan Keahlian...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Bidang Minat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="interest" placeholder="Masukkan Keahlian...">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Hobby</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="hobby" placeholder="Masukkan Hobby...">
              </div>
            </div>
            <input type="hidden" name="user_id" value="{{Auth::user()->user_id }}">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Tambah</button>
           </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal biodata-->
  @endif


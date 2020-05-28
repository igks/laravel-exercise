  @extends('layout.master')

  @section('content')
  <div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="panel panel-profile">
          <div class="clearfix">
            <!-- LEFT COLUMN -->
            <div class="profile-left">

              <!-- PROFILE HEADER -->
              <div class="profile-header">
                <div class="overlay"></div>
                <div class="profile-main">
                  <img src="{{$siswa->getAvatar()}}" class="img-circle" alt="Avatar" style="width:150px;">
                  <h3 class="name">{{$siswa->nama}}</h3>
                  <span class="online-status status-available">Available</span>
                </div>
              </div>
              <!-- END PROFILE HEADER -->

              <!-- PROFILE DETAIL -->
              <div class="profile-detail">
                <div class="profile-info">
                  <h4 class="heading">Basic Info</h4>
                  <ul class="list-unstyled list-justify">
                    <li>Alamat <span>{{$siswa->alamat}}</span></li>
                  </ul>
                </div>


                <div class="text-center"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit Profile</a>
                </div>
              </div>
              <!-- END PROFILE DETAIL -->
            </div>
            <!-- END LEFT COLUMN -->
          </div>
        </div>

      </div>
    </div>
    <!-- END MAIN CONTENT -->
  </div>
  @stop
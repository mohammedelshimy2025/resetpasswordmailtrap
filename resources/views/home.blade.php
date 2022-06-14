@extends('layouts.admin')

@section('content')
<!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-8">
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title">User Profile</h4>
                  <p class="card-category">Complete your profile</p>

                </div>
                <div class="card-body">
                  <form>

                    <div class="row">

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" value="{{$users->name}}" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" value="{{$users->email}}" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">password</label>
                          <input type="text" value="{{$users->password}}" class="form-control">
                        </div>
                      </div>

                    </div>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Eng Mostafa</h4>
                  <p class="card-description">
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
